<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="/">
				<img loading="prelaod" decoding="async" class="img-fluid" width="70" src="{{asset('images/logo.png')}}" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item "><a wire:navigate class="nav-link" href="/">Inicio</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="{{route('items')}}">Productos</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link" href="about">Acerca de Nosotros</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link" href="{{route('services')}}">Servicios</a></li>
					<li class="nav-item "><a wire:navigate class="nav-link " href="faq">FAQ</a></li>
				</ul>
				{{-- <a href="#!" class="btn btn-outline-primary">Contáctanos</a> --}}
                <a class="flex px-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                    href="http://127.0.0.1:8000/feria/login">
                    Ingresar
                </a>
                <a class="flex  items-center hover:text-yellow-500 text-sm text-gray-500"
                    href="http://127.0.0.1:8000/feria/register">
                    Registrarme
                </a>
			</div>
		</div>
	</nav>
</header>
