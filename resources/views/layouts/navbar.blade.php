

    {{-- <nav class="w-full py-4 bg-blue-800 shadow"> --}}
    <nav class="flex items-center justify-between px-6 py-3 border-b border-gray-100">
        <div id="header-left" class="flex items-center">
            <div class="font-semibold text-gray-800">
                <span class="text-xl text-yellow-500">&lt;Feria&gt;</span> App
            </div>
            <div class="ml-10 top-menu">
                <ul class="flex space-x-4">
                    <li>
                        <a class="flex items-center space-x-2 text-sm text-yellow-500 hover:text-yellow-900"
                            href="http://127.0.0.1:8000">
                            Inicio
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center space-x-2 text-sm text-gray-500 hover:text-yellow-500"
                            href="http://127.0.0.1:8000/blog">
                            Posts
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center space-x-2 text-sm text-gray-500 hover:text-yellow-500"
                            href="http://127.0.0.1:8000/blog">
                            Productos
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center space-x-2 text-sm text-gray-500 hover:text-yellow-500"
                            href="http://127.0.0.1:8000/blog">
                            Acerca de Nostros
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center space-x-2 text-sm text-gray-500 hover:text-yellow-500"
                            href="http://127.0.0.1:8000/blog">
                            Contactanos
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div id="header-right" class="flex items-center md:space-x-6">
            @guest
                @include('layouts.header-right-guest')
            @endguest

            @auth
                @include('layouts.header-right-auth')
            @endauth
        </div>
    </nav>
