<div class="z-50 px-3 py-4 mx-auto sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">

    <div class="relative grid items-center grid-cols-2">
      <ul class="flex items-center space-x-8 lg:flex">
            {{-- <x-nav-link
                href="{{ route('home') }}" :active="request()->routeIs('home')"
                :index="0"
                class="font-medium tracking-wide transition-colors duration-200 text-textc hover:text-purple-400">


            </x-nav-link> --}}
            {{-- <x-nav-link
                href="{{ route('db') }}" :active="request()->routeIs('db')"
                :index="0"
                class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-purple-400">
                {{ __('database') }}
            </x-nav-link> --}}

            <h2 class="text-2xl font-bold text-transparent bg-gradient-to-r from-accent to-secondary bg-clip-text">Bookmark-se</h2>
      </ul>

        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth

    </div>
  </div>
