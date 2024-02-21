

<div>
	<div class="profile">

        <div class="w-full mt-6" x-data="{ openTab: 1 }">

        @include('pages.profile.profile-header', ['company' => $company,'user'=>$user])


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
						<div class="p-0 tab-content">
                            <form wire:submit.prevent="submitProfile">

                        <input id="profile-foreground-img-file-input" type="file" name="portada"
                        class="">
                        <button type="submit">Guardar</button>
                            </form>

						</div>
					</div>



				</div>
			</div>
		</div>
        </div>
    </div>
</div>
