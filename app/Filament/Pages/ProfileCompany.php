<?php

namespace App\Filament\Pages;

use App\Models\Company;
use Filament\Pages\Page;

class ProfileCompany extends Page
{
    protected static bool $shouldRegisterNavigation = false;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile-company';
        protected static ?string $slug = '/{slug}/perfil';
    public Company $company;

    public function mount( $slug): void
    {
        $this->company = Company::where('slug', $slug)->firstOrFail();
    }

    // public function mount($record): void
	// {
    //     // dd($this);
	// 	$this->record = (new Company)->FindOrFail($record);
	// }
}
