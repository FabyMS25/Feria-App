<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\PostResource\Pages;
use App\Filament\App\Resources\PostResource\RelationManagers;
use App\Models\Client;
use App\Models\Post;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Filament\App;
use App\Filament;
use App\Models\ClientType;
use Illuminate\Support\Collection;
use App\Filament\Pages\Post as ShowPost;
class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Administración';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titulo de Publicación')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur:true)
                            ->afterStateUpdated(fn (Set $set, ?string $state)=> $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255),
                    ]),
                    Forms\Components\RichEditor::make('content')
                        ->label('Contenido de Publicación')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('meta_title'),
                    Forms\Components\TextInput::make('meta_description'),

                    Forms\Components\Toggle::make('active')
                        ->label('Activar')
                        ->required(),
                    Forms\Components\Grid::make()->schema([
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publicar en')
                            ->required(),
                    ]),
                    // Forms\Components\DateTimePicker::make('fecha_eliminado'),
                ])->columnSpan(8),

                Forms\Components\Section::make()
                    ->schema([
                    Forms\Components\FileUpload::make('thumbnail')
                    ->hidden(),
                    Forms\Components\Select::make('post_category_id')
                            ->label('Categorías')
                        ->multiple()
                        ->preload()
                        ->relationship('categories', 'name')
                        ->required(),
                    Forms\Components\Repeater::make('media')
                        ->label('Imagenes/videos y/o Archivos')
                        ->label('Media')
                        ->relationship()
                        ->schema([
                            Forms\Components\FileUpload::make('file_path')
                            ->afterStateUpdated(fn (Set $set, ?string $state)=> $set('thumbnail', $state)),
                        ]),
                    ])->columnSpan(4)
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('media.file_path')
                            ->label('Archivos')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                            ->label('Titulo')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                            ->label('Activo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('fecha_eliminado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('Notificar')
                ->form([
                Forms\Components\Section::make()
                    ->schema([
                        Select::make('client-type')
                            ->label('Tipo de Clientes')
                            ->options(ClientType::query()->pluck('name', 'id')->prepend('Todos', 'all'))
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(fn (Set $set) => $set('clients', []))
                            ->required(),

                        Select::make('clients')
                            ->label('Clientes')
                            ->multiple()
                            ->options(function (Get $get): Collection {
                                $typeId = $get('client-type');
                                if (empty($typeId)) {
                                    return Client::query()->pluck('name', 'id');
                                }
                                if ($typeId === 'all') {
                                    return Client::query()->pluck('name', 'id');
                                }
                                return Client::whereHas('types', function ($query) use ($typeId) {
                                    $query->where('client_type_id', $typeId);
                                })->pluck('name', 'id');
                            })
                            ->searchable()
                            ->preload()
                            ->required(),
                    ])
                    ])
                    ->action(function (array $data, Post $record): void {
                        $selectedClientIds = $data['clients'];
                        foreach ($selectedClientIds as $clientId) {
                            $client = Client::find($clientId);
                            if ($client) {
                                Notification::make()
                                    ->info()
                                    ->icon('heroicon-o-document-text')
                                    ->iconColor('primary')
                                    ->title($record->company->name . ' realizó una nueva publicación')
                                    ->body($record->title)
                                    // ->view('livewire.show-post-profile')
                                    // ->viewData(['posts'=>$record,'user'=>auth()->user(),'company'=>$record->company])
                                    ->actions([
                                        Action::make('Ver Post')
                                            ->button()
                                            ->url('/feria-client/post/'.$record->slug)
                                            // ->url(ShowPost::getUrl(['slug'=>$record->slug]))
                                            ->icon('heroicon-o-arrows-pointing-out')
                                            ->openUrlInNewTab() ,
                                        Action::make('Marcar como leido')
                                            ->button()
                                            ->color('success')
                                            ->markAsRead(),
                                    ])
                                    ->sendToDatabase($client);
                            }
                        }
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
