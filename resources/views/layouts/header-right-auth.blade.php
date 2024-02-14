<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div x-data="{ isActive: false }" class="relative">
  <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">

    @if(Auth::user())
        <a
        href="#"
        class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700"
        >
            {{Auth::user()->name}}
        </a>
    @endif
    <button
      x-on:click="isActive = !isActive"
      class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700"
    >
      <span class="sr-only">Menu</span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-4 w-4"
        viewBox="0 0 20 20"
        fill="currentColor"
      >
        <path
          fill-rule="evenodd"
          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
          clip-rule="evenodd"
        />
      </svg>
    </button>
  </div>

  <div
    class="absolute end-0 z-10 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg"
    role="menu">
    {{-- x-cloak
    x-transition
    x-show="isActive"
    x-on:click.away="isActive = false"
    x-on:keydown.escape.window="isActive = false"
  > --}}
    <div class="p-2">

        @foreach(Auth::user()->companies as $company)
      <a
        href="http://127.0.0.1:8000/feria/{{$company->slug}}/profile-page"
        class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
        role="menuitem"
      >
        {{$company->name}}
      </a>
        @endforeach

    </div>
  </div>
</div>
