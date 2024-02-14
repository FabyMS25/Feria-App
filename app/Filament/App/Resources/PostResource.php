<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\PostResource\Pages;
use App\Filament\App\Resources\PostResource\RelationManagers;
use App\Models\Client;
use App\Models\Post;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Actions\Action;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur:true)
                            ->afterStateUpdated(fn (Set $set, ?string $state)=> $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255),
                    ]),
                    Forms\Components\RichEditor::make('content')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('meta_title'),
                    Forms\Components\TextInput::make('meta_description'),

                    Forms\Components\Toggle::make('active')
                        ->required(),
                    Forms\Components\Grid::make()->schema([
                        Forms\Components\DateTimePicker::make('published_at')
                            ->required(),
                    ]),
                    // Forms\Components\DateTimePicker::make('fecha_eliminado'),
                ])->columnSpan(8),

                Forms\Components\Section::make()
                    ->schema([
                    Forms\Components\FileUpload::make('thumbnail')
                    ->hidden(),
                    Forms\Components\Select::make('post_category_id')
                        ->multiple()
                        ->preload()
                        ->relationship('categories', 'name')
                        ->required(),
                    Forms\Components\Repeater::make('media')
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
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
                Forms\Components\Section::make('Descripción de Tienda')
                    ->description('Enviar Notificaiones a Clientes')
                    ->schema([
                        Select::make('client')
                            ->label('Cliente')
                            ->multiple()
                            ->options(Client::query()->pluck('name', 'id')),
                    ])
                    ])
                    ->action(function (array $data, Post $record): void {
                        $selectedClientIds = $data['client'];
                        foreach ($selectedClientIds as $clientId) {
                            $client = Client::find($clientId);
                            if ($client) {
                                Notification::make()
                                    ->success()
                                    ->icon('heroicon-o-document-text')
                                    ->iconColor('success')
                                    ->title($record->user->name . ' realizó una nueva publicación')
                                    ->body($record->title)
                                    ->actions([
                                        Action::make('Ver Post')
                                            ->button()
                                            ->url(route('index')),
                                        Action::make('Marcar como leido')
                                            ->button()
                                            ->url(route('index')),
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