<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models;
use App\Models\Company;

class Post extends Page
{
    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.pages.show-post';
    protected static ?string $slug = 'post/{slug}';
    public Models\Post $post;

    public Company $company;

    public function mount( $slug): void
    {
        $this->post = Models\Post::where('slug', $slug)->firstOrFail();
        $this->company= $this->post->company;

    }
}
