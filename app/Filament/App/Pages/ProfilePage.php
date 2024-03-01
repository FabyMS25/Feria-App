<?php

namespace App\Filament\App\Pages;

use App\Models\Company;
use App\Models\Post;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Page;

use Filament\Forms;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;

use Filament\Notifications\Notification;
use Filament\Support\Exceptions\Halt;
class ProfilePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile-page';


        public ?array $data = [];

        public ?Company $company ;
        // public ?Post $posts;
        public $posts = [];

        public ?User $user;

    public function mount(): void
    {
        // abort_unless(auth()->user()->canManageSettings(), 403);

        $user = auth()->user();
        $roles = auth()->user()->roles;
        $company = Filament::getTenant(Company::class);
        $posts=[];

        if(!empty($this->postId)){
            $posts= Post::findOrFail($this->postId);

        }else{
            $posts=Post::query()
                ->where('active','=',1)
                ->where('company_id','=',$company->id)
                ->whereNotNull('published_at')
                // ->whereDate('published_at','<',Carbon::now())
                ->orderBy('published_at','desc')
                ->paginate(5);
        }

        $this->company=$company;
        // $this->posts=$posts;
        $this->user=$user;
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


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titulo de Publicación')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur:true)
                            ->afterStateUpdated(fn (Set $set, ?string $state)=> $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->hidden()
                            ->required()
                            ->maxLength(255),
                    Forms\Components\RichEditor::make('content')
                        ->label('Contenido de Publicación')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\Toggle::make('active')
                        ->label('Activar')
                        ->required(),
                    Forms\Components\Grid::make()->schema([
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Publicar en')
                            ->required(),
                    ]),


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

            $data['user_id'] = auth()->id();

        } catch (Halt $exception) {
            return;
        }
        Notification::make()
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send();
    }
}
