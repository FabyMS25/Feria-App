<?php

namespace App\Filament\App\Pages;

use App\Models\Post;
use Filament\Pages\Page;

class EditProfile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.app.pages.edit-profile';
    protected static bool $shouldRegisterNavigation = false;

}
