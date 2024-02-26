<?php

namespace App\Filament\Client\Resources\SubscriptionResource\Pages;

use App\Filament\Client\Resources\SubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubscription extends CreateRecord
{
    protected static string $resource = SubscriptionResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['client_id'] = auth()->id();

        return $data;
    }
}
