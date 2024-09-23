<!-- Settings Dropdown -->
<ul class="ml-auto flex items-center space-x-8 lg:flex">

    <select class="select select-bordered select-sm w-full max-w-xs">
        <option selected disabled>Collections</option>
            @foreach(Auth::user()->collections as $collection)
                <option value="{{ $collection->id }}" >{{ $collection->title}}</option>
            @endforeach

            {{-- dd($profile_data); --}}
    </select>

    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="avatar btn btn-circle btn-ghost" role="button" >
                    <div class="mask mask-squircle w-9">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>

                    {{-- <span>{{ Auth::user()->name }}</span> --}}
                </div>

            @else
                <span class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:bg-gray-50 focus:outline-none active:bg-gray-50">
                        {{ Auth::user()->name }}

                        <svg class="-me-0.5 ms-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </span>
            @endif
        </x-slot>

        <x-slot name="content">
            <!-- Account Management -->
            <div class="block px-4 py-2 font-bold text-gray-400">
                Hello, {{Auth::user()->name}}
            </div>

            <x-dropdown-link wire:navigate href="{{ route('profile.show') }}">
                <span class="inline-flex items-center"><x-heroicon-s-user class="text-icon mr-2 h-4 w-4"/> Profile</span>
            </x-dropdown-link>


            @can('view-admin', App\Models\User::class)
                <x-dropdown-link  href="{{ route('filament.app.resources.users.index') }}">
                    <span class="inline-flex items-center"><x-heroicon-s-wrench-screwdriver class="text-icon mr-2 h-4 w-4"/> Admin</span>
                </x-dropdown-link>
            @endcan



            @can('view-default', App\Models\User::class)
            <x-dropdown-link  href="{{ route('filament.app.resources.collections.index') }}">
                <span class="inline-flex items-center"><x-heroicon-s-rectangle-group class="text-icon mr-2 h-4 w-4"/> Collections</span>
            </x-dropdown-link>
        @endcan

            {{-- <x-dropdown-link wire:navigate href="{{ route('filament.admin.auth.login') }}">
                {{ __('Admin') }}

            </x-dropdown-link> --}}

            {{-- <x-dropdown-link wire:navigate href="{{ route('admin') }}">
                {{ __('Dashboard') }}
            </x-dropdown-link> --}}

            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-dropdown-link wire:navigate href="{{ route('api-tokens.index') }}">
                    {{ __('API Tokens') }}
                </x-dropdown-link>
            @endif

            <div class="divider m-0"></div>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}"
                         @click.prevent="$root.submit();">

                         <span class="inline-flex items-center"><x-iconsax-bul-logout class="text-icon mr-2 h-4 w-4"/> Log Out</span>

                </x-dropdown-link>
            </form>
        </x-slot>


    </x-dropdown>
</ul>
