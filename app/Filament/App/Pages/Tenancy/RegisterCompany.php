<?php

namespace App\Filament\App\Pages\Tenancy;

use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;

class RegisterCompany extends RegisterTenant
{
      public static function getLabel(): string
      {
            return 'Registrar Empresa';
      }

      public function form(Form $form): Form
      {
            return $form
            ->schema([
                Forms\Components\Grid::make(2)->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre de Empresa')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur:true)
                    ->afterStateUpdated(
                        function (Set $set, ?string $state){
                            $set('slug', Str::slug($state));
                            $set('representante_legal', Auth::user() ? Auth::user()->name : '');
                        }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(),
                ]),
                Forms\Components\Grid::make(2)->schema([
                Forms\Components\TextInput::make('nit_ci')
                    ->label('CI o Nit de Empresa')
                    ->maxLength(255),
                Forms\Components\TextInput::make('representante_legal')
                    ->maxLength(255)
                    ->required(function () {
                        return auth()->user()->name;
                    }),

                ]),
                Forms\Components\Select::make('commercial_category_id')
                    ->multiple()
                    ->preload()
                    ->relationship('categories', 'name'),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->imageEditor(),
            ]);
      }

      protected function handleRegistration(array $data): Company
      {
            $team = Company::create($data);

            $team->members()->attach(auth()->user());

            // Notification::make()
            //     ->success()
            //     ->icon('heroicon-o-hand-raised')
            //     ->iconColor('success')
            //                         ->title('¡Felicitaciones por formar parte del equipo!')
            //                         ->body('Bienvenid@ '.$team->name)
            //                         ->sendToDatabase(auth()->user());
            return $team;
      }
}
