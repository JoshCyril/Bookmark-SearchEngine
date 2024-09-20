<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <span class="inline-flex items-center"><x-authentication-card-logo /> <span class="ml-2 bg-gradient-to-r from-secondary to-accent bg-clip-text text-2xl font-bold text-transparent">Confirm Password</span></span>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="mt-1 block w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="mt-4 flex justify-end">
                <x-button class="ms-4">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
