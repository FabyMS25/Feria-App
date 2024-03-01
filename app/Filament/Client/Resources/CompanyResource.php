<?php

namespace App\Filament\Client\Resources;

use App\Filament\Client\Resources\CompanyResource\Pages;
use App\Filament\Client\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use  App\Filament\Pages\ProfileCompany;
use Filament\Infolists\Components\ViewEntry;
use Filament\Resources\Pages\Page;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nit_ci')
                    ->maxLength(255),
                Forms\Components\TextInput::make('representante_legal')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
                Forms\Components\TextInput::make('logo')
                    ->maxLength(255),
                Forms\Components\TextInput::make('portada')
                    ->maxLength(255),
                Forms\Components\Toggle::make('habilitado')
                    ->required(),
                Forms\Components\DateTimePicker::make('fecha_deshabilitado'),
                Forms\Components\Toggle::make('eliminado')
                    ->required(),
                Forms\Components\DateTimePicker::make('fecha_eliminado'),
                Forms\Components\TextInput::make('razon_eliminado')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nit_ci')
                    ->searchable(),
                Tables\Columns\TextColumn::make('representante_legal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('portada')
                    ->searchable(),
                Tables\Columns\IconColumn::make('habilitado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('fecha_deshabilitado')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('eliminado')
                    ->boolean(),
                Tables\Columns\TextColumn::make('fecha_eliminado')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('razon_eliminado')
                    ->searchable(),
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
                Tables\Actions\Action::make('Perfil')
                ->icon('heroicon-m-check-badge')
                // ->url(ProfileCompany::getUrl(['slug'=>$company->slug])),

        ->url(function ($record) {
            // $record contains the data of the current row
            // Access and use the row's data as needed
            $company = $record; // Assuming $record contains the company data
            return ProfileCompany::getUrl(['slug' => $company->slug]);
        }),
            ])


            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListCompanies::route('/'),
            // 'view' =>ProfileCompany::getUrl(),
        ];
    }
    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            ProfileCompany::class,
        ]);

        // return [
        //     // 'index' => Pages\ListCompanies::route('/'),
        //     'profile' =>ProfileCompany::getUrl(),
        // ];
    }
}
