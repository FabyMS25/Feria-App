<?php

namespace App\Filament\App\Pages;

use App\Models\Company;
use App\Models\Post;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Support\Exceptions\Halt;
class EditProfile extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.edit-profile';
    protected static bool $shouldRegisterNavigation = false;

        public ?array $data = [];

        public ?Company $company ;

    public function mount(): void
    {

        $this->company = Filament::getTenant(Company::class);

        $this->form->fill();
        $this->form->fill($this->company->attributesToArray());
    }

    public function portada(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('portada')
                    ->image()
                    ->imageEditor(),
            ])
            ->statePath('data');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('portada')
                    ->image()
                    ->imageEditor(),
                // TextInput::make('name')
                //     ->required(),
            ])
            ->statePath('data');
    }
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
    public function save(): void
    {
        try {
            $data = $this->form->getState();

            $this->company->update($data);
        } catch (Halt $exception) {
            return;
        }
        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}
