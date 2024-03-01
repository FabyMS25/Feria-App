<?php

namespace App\Filament\App\Pages;

use App\Models\Company;
use App\Models\Post;
use Filament\Pages\Page;

class ShowPost extends Page
{
    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.pages.show-post';
    protected static ?string $slug = 'post/{slug}';
    public Post $post;

    public Company $company;

    public function mount( $slug): void
    {
        $this->post = Post::where('slug', $slug)->firstOrFail();
        $this->company= $this->post->company;

    }
}
