<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommercialCategoryResource\Pages;
use App\Filament\Resources\CommercialCategoryResource\RelationManagers;
use App\Models\CommercialCategory;
use Filament\Forms;
use Filament\Forms\Components;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Illuminate\Support\Str;
class CommercialCategoryResource extends Resource
{
    protected static ?string $model = CommercialCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Categorías';

    protected static ?string $modelLabel = 'Categorías Comerciales';

    protected static ?string $navigationGroup = 'System Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\Section::make('Detalle de Categoria')
                    ->schema([
                        Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                    ->afterStateUpdated(fn (Set $set, ?string $state)=> $set('slug', Str::slug($state))),
                    Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255),
                        Components\TextInput::make('tipo_producto')
                            ->required()
                            ->maxLength(225),
                        Components\Toggle::make('habilitado')
                            ->required()
                            ->default(true),
                            ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Categoría')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_producto')
                    ->searchable(),
                Tables\Columns\IconColumn::make('habilitado')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCommercialCategories::route('/'),
            'create' => Pages\CreateCommercialCategory::route('/create'),
            'edit' => Pages\EditCommercialCategory::route('/{record}/edit'),
        ];
    }
}
