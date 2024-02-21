<?php

namespace App\Observers;

use App\Models\Post;

use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use App\Filament\App;
class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
                                Notification::make()
                                    ->success()
                                    ->icon('heroicon-o-document-text')
                                    ->iconColor('success')
                                    ->title('Nueva publicación creada')
                                    ->body($post['title'])
                                    ->actions([
                                        Action::make('Ver Post')
                                            ->button()
                                            ->url(App\Pages\ShowPost::getUrl([$post->id])),
                                    ])
                                    ->sendToDatabase(auth()->user());
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {

    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
