<?php

namespace App\Filament\App\Pages\Auth;

use Filament\Forms\Form;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Hash;
class EditProfile extends BaseEditProfile
{
    public function form(Form $form): Form
    {
        // return $form
        //     ->schema([
        //         TextInput::make('username')
        //             ->required()
        //             ->maxLength(255),
        //         $this->getNameFormComponent(),
        //         $this->getEmailFormComponent(),
        //         $this->getPasswordFormComponent(),
        //         $this->getPasswordConfirmationFormComponent(),
        //     ]);

        return $form
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
                    // ->hiddenOn('edit')
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state)=> Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context):bool=>$context == 'create'),

            ]);
    }
}
