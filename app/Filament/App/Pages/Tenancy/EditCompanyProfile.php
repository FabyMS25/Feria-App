<?php

namespace App\Filament\App\Pages\Tenancy;

use Closure;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Illuminate\Support\Str;
use Filament\Pages\Tenancy\EditTenantProfile;

class EditCompanyProfile extends EditTenantProfile
{
      public static function getLabel(): string
      {
            return 'Perfil de Empresa';
      }

      public function form(Form $form): Form
      {
            return $form
                ->schema([
                    TextInput::make('name')
                        ->label('Nombre de la Empresa'),
                    TextInput::make('slug')
                    ->disabled(),
                TextInput::make('representante_legal')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nit_ci')
                    ->maxLength(255),
                TextInput::make('link')
                    ->maxLength(255),
                Toggle::make('habilitado')
                    ->required()
                    ->default(true),
                DateTimePicker::make('fecha_deshabilitado')
                    ->hidden(fn ($record) => $record->habilitado)
                    ->disabled(),
                Toggle::make('eliminado')
                    ->label('Eliminar'),
                DateTimePicker::make('fecha_eliminado')
                    ->label('Fecha Eliminado')
                    ->format('Y-m-d H:i:s')
                    ->hidden(fn ($record) => !$record->eliminado)
                    ->disabled(),
                TextInput::make('razon_eliminado')
                    ->label('Razon Eliminado')
                    ->maxLength(255)
                    ->hidden(fn ($record) => !$record->eliminado),
                FileUpload::make('logo')
                    ->image()
                    ->imageEditor(),
                  ]);
      }
        protected function handleRegistration(array $data)
      {
        Notification::make()
            ->success()
            ->icon('heroicon-o-pencil-square')
            ->iconColor('success')
            ->title('Tus datos fueron Actualizados!')
            // ->body($data)
            ->sendToDatabase(auth()->user());
      }
}
