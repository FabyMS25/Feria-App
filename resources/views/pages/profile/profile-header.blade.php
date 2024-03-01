
            <div class="profile-header position-relative " >
                @if ($company->portada)
                <div class="profile-header-cover" style="background: url(/storage/{{$company->portada}}); height: 20rem; width=100%">
                    <div class="" style="position: relative; padding: 0 3.125rem; align-items: flex-end;">
                        <div class="overlay-content">
                            <div class="text-end p-3" style="align-items: flex-end">
                                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                    <a href="{{App\Filament\App\Pages\EditProfile::getUrl()}}">
                                    <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                        <i class="heroicon-o-arrow-top-right-on-square  me-1"></i> Editar Perfil
                                    </label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="profile-header-cover">
                    <div class="" style="position: relative; padding: 0 3.125rem; align-items: flex-end;">
                        <div class="overlay-content">
                            <div class="text-end p-3" style="align-items: flex-end">
                                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                    <a href="{{App\Filament\App\Pages\EditProfile::getUrl()}}">
                                    <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                        <i class="ri-image-edit-line align-bottom me-1"></i> Editar Perfil
                                    </label>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if ($admin)
                    @include('pages.profile.profile-nav', ['company' => $company])
                @else
                    @include('pages.profile.profile-nav-public', ['company' => $company])
                @endif
            </div>
