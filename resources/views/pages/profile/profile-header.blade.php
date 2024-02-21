
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
                        <a href="{{App\Filament\App\Pages\EditProfile::getUrl()}}">
                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                            <i class="ri-image-edit-line align-bottom me-1"></i> Editar Perfil
                        </label>
                        </a>
                    </div>
                </div>
            </div>


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
