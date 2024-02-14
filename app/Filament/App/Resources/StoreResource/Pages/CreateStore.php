<?php

namespace App\Filament\App\Resources\StoreResource\Pages;

use App\Filament\App\Resources\StoreResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateStore extends CreateRecord
{
    protected static string $resource = StoreResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Nueva Tienda Agregada.')
            ->body('La empresa agrego una nueva Tienda.');
    }
}
