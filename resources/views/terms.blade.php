<x-guest-layout>
    <div class="bg-gray-100 pt-4">
        <div class="flex min-h-screen flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="prose mt-6 w-full overflow-hidden bg-base-100 p-6 shadow-md sm:max-w-2xl sm:rounded-lg">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
