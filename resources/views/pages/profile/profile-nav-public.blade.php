		<div class="profile-header-content">
			<div class="profile-header-img">
					<img src="/storage/{{$company->logo}}" alt="">
			</div>
            <div class="profile-header-tab nav nav-tabs ">
				<ul class="profile-header-tab nav nav-tabs nav-tabs-v2">

                    <li class="nav-item -mb-px mr-1" @click="openTab = 1">
						<a href="#profile-activities" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Publicaciones</div>
							<div class="nav-value">2,592</div>
						</a>
                    </li>
                    <li class="nav-item mr-1" @click="openTab = 3">
						<a href="#profile-orders" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Pedidos</div>
							<div class="nav-value">2,592</div>
						</a>
                    </li>
                    <li class="nav-item mr-1" @click="openTab = 6">
						<a href="#profile-products" class="nav-link" data-bs-toggle="tab">
							<div class="nav-field">Productos</div>
							<div class="nav-value">{{$company->posts->count()}}</div>
						</a>
                    </li>
				</ul>

                <div class="text-end p-3" >
                    <h4  @click="openTab = 8">
						<a href="#profile-bills" class="nav-link" data-bs-toggle="tab">
                            {{$company->subscriptions->count()}}
                            {{$company->subscriptions->count()==1 ? 'Seguidor' :'Seguidores'}}
                        </a>
                    </h3>
                </div>
            </div>

		</div>
