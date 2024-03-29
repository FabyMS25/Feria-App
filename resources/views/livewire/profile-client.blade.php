
<?php
    $allPosts= App\Models\Post::all();

    $subscriptions=$client->subscriptions;
    // $posts=$client->subscriptions->first()->company->posts;
?>
<div>
	<div class="profile">

        <div class="w-full mt-6" x-data="{ openTab: 1 }">

            <div class="profile-header position-relative" >
                @if ($client->profile)
                    <img src="/storage/{{$client->profile->potada}}" alt="" class="profile-wid-img">
                @else
                    <div class="profile-header-cover"></div>
                @endif
                <div class="overlay-content">
                    <div class="text-end p-3">
                        <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                            {{-- <a href="{{App\Filament\App\Pages\EditProfile::getUrl()}}"> --}}
                            <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                <i class="ri-image-edit-line align-bottom me-1"></i> Editar Perfil
                            </label>
                            {{-- </a> --}}
                        </div>
                    </div>
                </div>
                @include('pages.profile.profile-client-header', ['client'=>$client])
            </div>


		<div class="profile-sidebar">
			<div class="desktop-sticky-top">
				<h4>{{$client->name}}</h4>
				<div class="fw-500 mb-3 text-muted mt-n2">{{$client->email}}</div>
            </div>
        </div>
		<div class="profile-container">

			<div class="profile-content">
				<div class="row">
					<div class="col-xl-8">
						<div class="p-0 tab-content">


							<div class="" id="profile-activities" x-show="openTab === 1">
                                @foreach ($subscriptions as $item)
                                    @include('pages.profile.post', ['postList' => $item->company->posts,'user'=>$client])
                                @endforeach
							</div>

							<div class=" " x-show="openTab === 2">
                                @include('pages.tabs.companies', ['user'=>$client])
                            </div>
                            <div class="" x-show="openTab === 3">
                                Duis imperdiet ullamcorper nibh, sed euismod dolor facilisis sit amet. Etiam quis cursus lorem. Vivamus euismod accumsan neque lobortis tempus. Praesent nec lacinia odio, a dictum risus. Sed eget dictum turpis, vitae iaculis orci. Vivamus laoreet consequat velit, non viverra diam pulvinar a. Aliquam bibendum ligula lacus, ac convallis ipsum hendrerit ut. Suspendisse rutrum dui libero, non aliquam lectus lobortis at. Donec gravida finibus sollicitudin. Nulla ut metus finibus purus vehicula porttitor. Fusce id sem non nisl pulvinar scelerisque.
                            </div>
                            <div class=" x-show="openTab === 4">
                                @include('pages.tabs.notifications', ['user'=>$client])
                            </div>


						</div>
					</div>

                    {{-- @include('pages.profile.profile-trends',['posts'=>$allPosts]) --}}

				</div>
			</div>
		</div>
        </div>
    </div>
</div>
