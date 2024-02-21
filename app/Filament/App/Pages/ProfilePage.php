<?php

namespace App\Filament\App\Pages;

use App\Models\Post;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Pages\Page;

use Illuminate\Contracts\View\View;
class ProfilePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.app.pages.profile-page';


    public function mount(): void
    {
        // abort_unless(auth()->user()->canManageSettings(), 403);
    }

    protected function getActions(): array
    {
        return [
            Action::make('settings')->action('openSettingsModal'),
        ];
    }
    public function openSettingsModal(): void
    {
        $this->dispatchBrowserEvent('open-settings-modal');
    }

    // protected function getHeader(): View
    // {
    //     return view('filament.settings.custom-header');
    // }

    // protected function getFooter(): View
    // {
    //     return view('filament.settings.custom-footer');
    // }
}
