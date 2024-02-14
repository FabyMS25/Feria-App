
<h3 id="slogan">
    Feria <br>
    Together we achieve exceptional goodness!
</h3>
<p>Ingresar como
    <?php
        // dd(request()->route()->getName())
    ?>
@if(request()->route()->getName() === 'filament.feria.auth.login')
    <a href="{{ url('/feria-client/login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
        Cliente
    </a>
@else
    @if(request()->route()->getName() === 'filament.feria-client.auth.login')
    <a href="{{ url('/feria/login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
        Usuario
    </a>
@endif
@endif
</p>

@vite('resources/css/login.css')
