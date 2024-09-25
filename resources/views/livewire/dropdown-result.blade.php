<div class="min-h-screen w-full">
    <!-- Display the session value -->
    @if ($selectedValue)
        <div class="label">
            <span class="label-text">Colelction: {{ $selectedValue }}</span>
        </div>

        <x-partials.search />

        <div class="grid w-11/12 grid-cols-4 gap-4 text-left">

            @livewire('api-result')

            <div class="card col-span-1 w-full bg-base-100 shadow-xl">
                Graph
            </div>
        </div>
    @else
        <div class="container relative flex min-h-screen justify-center bg-base-200">
            <div class="z-20 pt-20 text-center">
                <div class="max-w-md">
                    @auth
                        <h3 class="bg-gradient-to-r from-accent to-secondary bg-clip-text text-3xl font-bold text-transparent">Hello, {{Auth::user()->name}}</h3>
                    @endauth
                    <div class="flex items-center py-6">
                        <span> Please select a collecion or create</span>
                        <span>
                            <a class="btn btn-primary btn-xs ml-2" href="{{ route('filament.app.resources.collections.index') }}">
                                <span class="inline-flex items-center"><x-heroicon-s-rectangle-group class="text-icon mr-2 h-4 w-4"/> Collection</span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <img class="absolute bottom-0 left-0 z-10 h-full w-full object-cover" src="{{ asset('storage/assets/img/bg.png') }}">
        </div>
    @endif
</div>
