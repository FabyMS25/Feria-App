{{-- <x-filament-panels::page> --}}


<div>
	<div class="profile">

        <div class="w-full" x-data="{ openTab: 1 }">

            @include('pages.profile.profile-header', ['company' => $company,'admin'=>false])

		<div class="profile-container">

            @include('pages.profile.profile-sidebar', ['company' => $company])

			<div class="profile-content">

				<div class="row">
						<div class="p-0 tab-content">
							<div class="" id="profile-activities" x-show="openTab === 1">
                                @include('pages.profile.post', ['postList' => $company->posts])
							</div>

							<div class=" " x-show="openTab === 3">
                                {{-- @include('livewire.notifications', ['postList' => $company->posts]) --}}
                            </div>
                            <div class="" x-show="openTab === 6">
                                @include('pages.tabs.products', ['postList' => $company->posts])
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

{{-- </x-filament-panels::page> --}}
