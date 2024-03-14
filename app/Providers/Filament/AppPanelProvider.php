<?php

namespace App\Providers\Filament;

use App\Filament\App\Pages\Tenancy\EditCompanyProfile;
use App\Filament\App\Pages\Tenancy\RegisterCompany;
use App\Models\Company;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

use Filament\Navigation\NavigationItem;
use Filament\Navigation\NavigationGroup;
// use RalphJSmit\Filament\Notifications\FilamentNotifications;

use Filament\Facades\Filament;
use App\Filament\Pages\ProfileCompany;
use App\Filament\App\Pages\Auth\EditProfile;
class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('feria')
            ->path('feria')
            ->login()
            ->profile(EditProfile::class)
            ->colors([
                'primary' => 'rgb(48, 190, 255)',
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => 'rgb(32,201,151)',
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->sidebarCollapsibleOnDesktop()
            ->databaseNotifications(true)
            ->databaseNotificationsPolling(interval: '30s')

            ->userMenuItems([
                MenuItem::make()
                    ->label('Admin')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->url('/admin')
                    ->visible(fn (): bool => auth()->user()->hasRole('Admin'))
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('Administración')
                    ->collapsible(),
                NavigationGroup::make()
                    ->label('Publicidad')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Configuraciones')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Reportes')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label(fn (): string => __('navigation.settings'))
                    ->icon('heroicon-o-cog-6-tooth')
                    ->collapsed(),
            ])
            ->navigationItems([
                NavigationItem::make(label:'Perfil')
                    ->url(function () {
                        $company=Filament::getTenant(Company::class);
                        $slug =$company->slug;
                        return "/feria/$slug/$slug/perfil";
                    })
                    ->icon('heroicon-o-home')
                    ->activeIcon('heroicon-s-home')
                    ->sort(1),
                NavigationItem::make(label:'Estadisticas')
                    ->url( '/feria')
                    ->icon('heroicon-o-presentation-chart-line')
                    ->activeIcon('heroicon-s-presentation-chart-line')
                    ->sort(3),
                NavigationItem::make(label:'Reportes')
                    ->url('/profile', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-presentation-chart-line')
                    ->activeIcon('heroicon-s-presentation-chart-line')
                    ->group('Reportes')
                    ->sort(3)
                    // ->visible(fn():bool=>auth()->user()->can(abilities:'view-company'))
            ])

            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\\Filament\\App\\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\\Filament\\App\\Pages')
            ->pages([
                ProfileCompany::class,
                // Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/App/Widgets'), for: 'App\\Filament\\App\\Widgets')

            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])

            ->authMiddleware([
                Authenticate::class,
            ])
            ->tenant(Company::class, ownershipRelationship: 'company', slugAttribute: 'slug')
            ->tenantRegistration(RegisterCompany::class)
            ->tenantProfile(EditCompanyProfile::class)
            ->viteTheme('resources/css/filament/feria/theme.css')
            ;
    }
}
