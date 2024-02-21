{{-- <x-filament-panels::page> --}}
    {{-- <livewire:edit-profile /> --}}

	<div class="profile">

        <div class="w-full mt-6" x-data="{ openTab: 1 }">

         <x-filament-panels::form wire:submit="save">
            <div class="profile-header position-relative" >
                @if ($company->portada)
                    <img src="/storage/{{$company->portada}}" alt="" class="profile-wid-img">
                @else
                    <div class="profile-header-cover"></div>
                @endif
                <div class="overlay-content">
                    <div class="text-end p-3">
                        {{ $this->form }}
                    </div>
                </div>
            @include('pages.profile.profile-header', ['company' => $company,'user'=>$company->user])
        </div>
		<div class="profile-sidebar">
			<div class="desktop-sticky-top">
				<h4>{{$company->name}}</h4>
				<div class="fw-500 mb-3 text-muted mt-n2">{{$company->link}}</div>
            </div>
        </div>
		<div class="profile-container">

			<div class="profile-content">
				<div class="row">
					<div class="col-xl-8">

                            {{-- <x-filament-panels::form wire:submit="save"> --}}
                                {{-- {{ $this->form }} --}}

                                <x-filament-panels::form.actions
                                    :actions="$this->getFormActions()"
                                />
                            {{-- </x-filament-panels::form> --}}
					</div>
				</div>
			</div>
		</div>

                            </x-filament-panels::form>
        </div>
    </div>

{{-- </x-filament-panels::page> --}}
