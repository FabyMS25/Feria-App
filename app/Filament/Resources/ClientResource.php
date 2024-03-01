<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'User Management';
    protected static ?string $navigationLabel ='Clientes';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Datos de Usuario')
                ->description('llenar datos de Usuario')
                ->schema([
                    TextInput::make('name')
                    ->label('Nombre de Usuario')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('email')
                    ->label('E-mail')
                    ->required()
                    ->email()
                    ->maxLength(255),
                // Forms\Components\DateTimePicker::make('email_verified_at'),
                    TextInput::make('password')
                    ->label('Contraseña')
                    ->password()
                    ->hiddenOn('edit')
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state)=> Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context):bool=>$context == 'create'),
                ])->columnSpan(2)->columns(2),
                Section::make('Avatar')->schema([
                    Forms\Components\FileUpload::make('avatar')
                    ->image()
                    ->imageEditor(),
                    Forms\Components\Select::make('client_type_id')
                        ->multiple()
                        ->preload()
                        ->relationship('types', 'name')
                        ->required(),
                ])->columnSpan(1)->columns(1),
            ])
            ->columns([
                'default'=> 3,
                'sm'=>3,
                'md'=>3,
                'lg'=>3
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('country.name')
                //     ->sortable()
                //     ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('last_name')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('middle_name')
                //     ->searchable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('address')
                //     ->searchable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('zip_code')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('date_of_birth')
                //     ->date()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
