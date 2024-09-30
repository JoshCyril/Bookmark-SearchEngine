<div class="min-h-screen w-full">
    <!-- Display the session value -->
    @if ($selectedValue)

        @if($isEmbedded == true)
            <x-partials.search :colAuth="$colAuth"/>

            <div class="grid w-11/12 grid-cols-4 gap-4 text-left">
                <div class="col-span-3 w-full">
                    @livewire('api-result' )
                    @livewire('api-img-result')
                    @livewire('api-code-result')
                </div>

                <div class="card col-span-1 w-full bg-base-100 shadow-xl">
                    <dl class="mx-4 mt-4 grid grid-cols-1 gap-2">
                        <div class="border-base flex flex-col rounded-lg border px-4 py-8 text-center">
                        <dt class="text-textc order-last text-lg font-medium">{{ $collection->title }}</dt>

                        <dd class="text-3xl font-extrabold text-primary">{{ $url_count }}</dd>
                        </div>
                    </dl>
                    <dl class="mx-4 my-4 grid grid-cols-1 gap-2">
                        <div class="border-base flex flex-col rounded-lg border px-4 py-8 text-center">
                            {{-- @livewire('chart') --}}
                            Graph
                        </div>
                    </dl>
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

                            @if($statusC == 0)
                                <span>
                                    <form wire:submit.prevent="submit">
                                        <button class="btn btn-primary btn-xs mr-2" type="submit">
                                            <span class="inline-flex items-center"><x-heroicon-s-rectangle-group class="text-icon mr-2 h-4 w-4"/> Create</span>
                                        </button>
                                    </form>
                                </span>
                                <span>an embedding for {{ $collection->title }} </span>
                            @else
                                <span class="flex items-center">
                                    <span class="loading loading-infinity loading-xs mr-2"></span> | {{ $status }}
                                </span>
                            @endif

                        </div>

                    </div>
                </div>

                <img class="absolute bottom-0 left-0 z-10 h-full w-full object-cover" src="{{ asset('storage/assets/img/bg.png') }}">
            </div>
        @endif

    @else
        <div class="container relative flex min-h-screen justify-center bg-base-200">
            <div class="z-20 pt-20 text-center">
                <div class="max-w-md">
                    @auth
                        <h3 class="bg-gradient-to-r from-accent to-secondary bg-clip-text text-3xl font-bold text-transparent">Hello, {{Auth::user()->name}}</h3>
                    @endauth
                    <div class="flex items-center py-6">
                        <span> Please select a collection or create</span>
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
