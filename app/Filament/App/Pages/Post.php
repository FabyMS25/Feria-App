<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class Post extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.post-view';

}
