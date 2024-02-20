<?php

namespace App\Filament\App\Pages;

use Filament\Facades\Filament;
use Filament\Pages\Page;

class ProfilePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.app.pages.profile-page';

    public function navigateToNotifications()
    {
        Filament::navigateTo('filament.app.pages.notifications-page');
        // return view('filament.app.pages.notifications-page');
    }

}
