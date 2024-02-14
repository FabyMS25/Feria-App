<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'User Management';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() > 10 ? 'warning' : 'success';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Datos de Usuario')
                ->description('llenar datos de Usuario')
                ->schema([
                    TextInput::make('name')
                    ->label('Nombre de Usuario')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('email')
                    ->label('E-mail')
                    ->required()
                    ->email()
                    ->maxLength(255),
                // Forms\Components\DateTimePicker::make('email_verified_at'),
                    TextInput::make('password')
                    ->label('Contraseña')
                    ->password()
                    // ->hiddenOn('edit')
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state)=> Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context):bool=>$context == 'create'),
                    Select::make('roles')
                    ->label('Roles')
                    ->multiple()
                    ->relationship('roles','name')
                    ->dehydrated(fn ($state)=> filled($state))
                    ->preload()
                    ->required(),
                ])->columnSpan(2)->columns(2),
                Section::make('Permisos de Usuario')->schema([
                    Select::make('permissions')
                        ->label('Permisos')
                        ->relationship('permissions','name')
                        ->multiple()
                        ->disabled(),
                ])->columnSpan(1)->columns(1),
            ])
            ->columns([
                'default'=> 3,
                'sm'=>3,
                'md'=>3,
                'lg'=>3
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('roles.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('verified')
                ->query(fn (Builder $query): Builder => $query->whereNotNull('email_verified_at'))
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('Verificar')
                ->icon('heroicon-m-check-badge')
                ->action(function(User $user){
                    $user->email_verified_at = Date('Y-m-d H:i:s');
                    $user->save();
                }),
                Tables\Actions\Action::make('Desverificar')
                ->icon('heroicon-m-x-circle')
                ->action(function(User $user){
                    $user->email_verified_at = null;
                    $user->save();
                })
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\PermissionsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }


    public function store(Request $request)
    {
        $request->validate([
            // Your validation rules here
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->syncRoles($request->input('roles', []));

        $user->syncPermissions($request->input('permissions', []));

        return redirect()->route('users.index')
            ->withSuccess('User created successfully.');

    }

    // public static function getLabel(): ?string{
    //     $locale = app()->getLocale();
    //     if($locale == 'es'){
    //         return "Usuarios";
    //     }
    // }

}
