<?php

namespace App\Observers;

use App\Models\Company;use
Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;

class CompanyObserver
{
    /**
     * Handle the Company "created" event.
     */
    public function created(Company $company): void
    {
        Notification::make()
            ->title('Usuario Actualizado')
            ->body('se guardo sus Datos')
            ->actions([
                Action::make('view')
                    ->button()
                    ->url(route('index')),
            ])
            ->sendToDatabase(auth()->user());
    }

    /**
     * Handle the Company "updated" event.
     */
    public function updated(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "deleted" event.
     */
    public function deleted(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "restored" event.
     */
    public function restored(Company $company): void
    {
        //
    }

    /**
     * Handle the Company "force deleted" event.
     */
    public function forceDeleted(Company $company): void
    {
        //
    }
}
