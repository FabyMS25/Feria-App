{{-- <x-filament-panels::page> --}}
    {{-- <livewire:profile /> --}}


<div>
	<div class="profile">

        <div class="w-full " x-data="{ openTab: 1 }">
            @include('pages.profile.profile-header', ['company' => $company,'admin'=>true])

		<div class="profile-container">

            @include('pages.profile.profile-sidebar', ['company' => $company,'user'=>$user])

			<div class="profile-content">
				<div class="row">
						<div class="p-0 tab-content">


							<div class="" id="profile-activities" x-show="openTab === 1">
                                <div class="card">
                                <div class="card-header fw-bold bg-none d-flex align-items-center">
                                    Weekly Web Analytics
                                    <span class="badge ms-3 fw-semibold bg-theme bg-opacity-15 text-theme">11 Mar - 18 Mar</span>
                                    <a href="#" class="ms-auto text-muted text-decoration-none" data-toggle="card-expand"><i class="fa fa-expand"></i></a>
                                </div>
                                <div class="card-body text-body text-center">
                                    <canvas id="barChart" class="h-150"></canvas>
                                </div>
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item border-top-0 rounded-top-0 d-flex align-items-center">
                                    <div class="w-40px h-40px bg-theme bg-opacity-15 text-theme d-flex align-items-center justify-content-center rounded-pill">
                                        <i class="fa fa-bar-chart fs-20px"></i>
                                    </div>
                                    <div class="flex-fill px-3 py-1">
                                        <div class="fw-semibold">Total Visitors</div>
                                        <div class="small text-body text-opacity-50">11 Mar - 18 Mar</div>
                                    </div>
                                    <div>
                                        <div class="fw-semibold h3 m-0">1.3m</div>
                                    </div>
                                    </div>
                                </div>
                                </div>


                            <div class="text-end p-3" style="align-items: flex-end">
                                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                <a  href="{{App\Filament\App\Resources\PostResource::getUrl('create')}}">
                                    <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                        <i class="heroicon-o-arrow-top-right-on-square  me-1"></i> Crear Nueva Publicacion
                                    </label>
                                    </a>
                                </div>
                            </div>
                            <x-filament-panels::form wire:submit="save">
                                 {{-- {{ $this->form }} --}}

                                {{-- <x-filament-panels::form.actions
                                    :actions="$this->getFormActions()"
                                /> --}}
                            </x-filament-panels::form>


                                <hr>
                                @include('pages.tabs.notifications', ['postList' => $company->posts,'user'=>$user])
							</div>

							<div class=" " x-show="openTab === 2">
                                @include('livewire.notifications', ['postList' => $company->posts,'user'=>$user])
                            </div>
                            <div class="" x-show="openTab === 3">

                                @include('pages.tabs.orders', ['list' => $company->subscriptions])</div>
                            <div class="" x-show="openTab === 4">
                                @include('pages.tabs.ventas', ['postList' => $company->posts,'user'=>$user])
                            </div>

                            <div class="" x-show="openTab === 5">
                                @include('pages.profile.post', ['postList' => $company->posts,'user'=>$user])
                            </div>
                            <div class="" x-show="openTab === 6">
                                @include('pages.tabs.inventory', ['postList' => $company->posts,'user'=>$user])
                            </div>
                            <div class="" x-show="openTab === 7">
                                @include('pages.tabs.cuentas', ['postList' => $company->posts,'user'=>$user])
                            </div>
                            <div class="" x-show="openTab === 8">
                                @include('pages.tabs.subscriptions', ['list' => $company->subscriptions])
                            </div>

    					</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- </x-filament-panels::page> --}}
