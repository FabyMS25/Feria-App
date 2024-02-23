<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Post extends Page
{
    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.app.pages.show-post';
    protected static ?string $slug = 'post/{id}';
    public Post $record;
    public function mount($id): void
	{
		$this->record = (new Post)->FindOrFail($id);
	}

}
