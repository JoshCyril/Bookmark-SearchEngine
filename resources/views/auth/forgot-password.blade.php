<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <span class="inline-flex items-center"><x-authentication-card-logo /> <span class="ml-2 text-2xl font-bold text-transparent bg-gradient-to-r from-secondary to-accent bg-clip-text">Forgot Password</span></span>
        </x-slot>

        <div class="mb-4 text-sm opacity-60 text-textc">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
