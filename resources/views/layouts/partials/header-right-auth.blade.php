<!-- Settings Dropdown -->
<ul class="ml-auto flex items-center space-x-8 lg:flex">

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
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
            </div>

            <x-dropdown-link wire:navigate href="{{ route('profile.show') }}">
                {{ __('Profile') }}
            </x-dropdown-link>

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

            <div class="border-t border-gray-200"></div>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}"
                         @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>


    </x-dropdown>
</ul>
