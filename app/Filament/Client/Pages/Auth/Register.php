<?php

namespace App\Filament\Client\Pages\Auth;
use App\Models\Role;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Auth\Register as BaseRegisterPage;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Filament\Facades\Filament;
use Filament\Forms\Components\Builder;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Filament\Notifications\Notification;
use Illuminate\Auth\Events\Registered;

class Register extends BaseRegisterPage
{
    public function form(Form $form):Form
    {
        return $form->schema([
                Forms\Components\FileUpload::make('avatar')
                    ->image()
                    ->imageEditor(),
                    // Forms\Components\Select::make('client_type_id')
                    //     ->multiple()
                    //     ->relationship(
                    //         name: 'types',
                    //         titleAttribute: 'name'
                    //         )
                    //     ->searchable()
                    //     ->preload(),
            $this->getNameFormComponent(),
            $this->getEmailFormComponent(),
            // Forms\Components\TextInput::make('celular')
            //     ->required()
            //     ->tel(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent()
        ])
        ->statePath('data');
    }
    public function register(): ?RegistrationResponse
    {
        try {
            $this->rateLimit(2);
        } catch (TooManyRequestsException $exception) {
            Notification::make()
                ->title(__('filament-panels::pages/auth/register.notifications.throttled.title', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]))
                ->body(array_key_exists('body', __('filament-panels::pages/auth/register.notifications.throttled') ?: []) ? __('filament-panels::pages/auth/register.notifications.throttled.body', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]) : null)
                ->danger()
                ->send();

            return null;
        }

        $data = $this->form->getState();

        $user = $this->getUserModel()::create($data);

        app()->bind(
            \Illuminate\Auth\Listeners\SendEmailVerificationNotification::class,
        );
        event(new Registered($user));

        Filament::auth()->login($user   );

        session()->regenerate();

        return app(RegistrationResponse::class);
    }

}
