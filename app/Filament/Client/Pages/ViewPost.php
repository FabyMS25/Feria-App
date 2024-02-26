<?php

namespace App\Filament\Client\Pages;

use App\Models\Post;
use Filament\Pages\Page;

class ViewPost extends Page
{

    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.client.pages.view-post';
    // protected static ?string $slug = 'post/{id}';
    public Post $record;
    public function mount($id): void
	{
		$this->record = (new Post)->FindOrFail($id);
	}
}
