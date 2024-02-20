

<div>
	<div class="profile">

        {{-- @include('pages.profile.profile-header', ['company' => $company,'user'=>$user]) --}}

        <div class="w-full mt-6" x-data="{ openTab: 1 }">
		<div class="profile-header position-relative" >
			{{-- <div class="profile-header-cover"> --}}
            @if ($company->portada)
                                <img src="{{ asset(Auth::user()->picture) }}" alt="" class="w-16 h-16 rounded-full object-cover">
            @else
                <img src="{{ URL::asset('images/profile-bg.jpg') }}" class="profile-wid-img" alt=""  >
            @endif
            {{-- </div> --}}
            <div class="overlay-content">
                <div class="text-end p-3">
                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                        <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                            <i class="ri-image-edit-line align-bottom me-1"></i> Editar Perfil
                        </label>
                    </div>
                </div>
            </div>
<?php


?>

			<div class="profile-header-content">
				<div class="profile-header-img">
					<img src="/storage/{{$company->logo}}" alt="">

				</div>
				<ul class="profile-header-tab nav nav-tabs nav-tabs-v2">

                    <li class="nav-item -mb-px mr-1" @click="openTab = 1">
						<a href="#profile-activities" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Actividades</div>
							<div class="nav-value">2,592</div>
						</a>
                                {{-- <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tab 2</a> --}}
                    </li>
                    <li class="nav-item mr-1" @click="openTab = 2">
						<a href="#profile-sales" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Ventas</div>
							<div class="nav-value">2,592</div>
						</a>
                    </li>
                    <li class="nav-item mr-1" @click="openTab = 3">
						<a href="#profile-orders" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Compras</div>
							<div class="nav-value">2,592</div>
						</a>
                    </li>
                    <li class="nav-item mr-1" @click="openTab = 4">
						<a href="#profile-products" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Productos</div>
							<div class="nav-value">{{$company->posts->count()}}</div>
						</a>
                    </li>
                    <li class="nav-item mr-1" @click="openTab = 5">
						<a href="#profile-bills" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Cuentas</div>
							<div class="nav-value">2,592</div>
						</a>
                    </li>
				</ul>

			</div>
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
