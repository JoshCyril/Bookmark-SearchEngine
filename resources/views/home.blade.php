<x-app-layout>

    @section('hero')

    <div class="relative h-dvh w-full px-4">
          <div class="z-20 flex flex-col py-12 sm:mb-0 sm:text-center">
            <div class="mb-6 sm:mx-auto">
              <div class="bg-primary-50 flex h-12 w-12 items-center justify-center rounded-full">
                <x-heroicon-m-bookmark-square class="h-10 w-10 text-secondary"/>
              </div>
            </div>
            <div class="mb-10 max-w-xl sm:text-center md:mx-auto md:mb-12 lg:max-w-2xl">
              <h3 class="text-textc mb-6 max-w-lg font-sans text-2xl font-bold leading-none tracking-tight sm:text-3xl md:mx-auto">
                <span class="relative inline-block">
                  <svg viewBox="0 0 52 24" fill="currentColor" class="absolute left-0 top-0 z-0 -ml-20 -mt-8 hidden w-32 text-accent opacity-50 sm:block lg:-ml-28 lg:-mt-10 lg:w-32">
                    <defs>
                      <pattern id="e77df901-b9d7-4b9b-822e-16b2d410795b" x="0" y="0" width=".135" height=".30">
                        <circle cx="1" cy="1" r=".7"></circle>
                      </pattern>
                    </defs>
                    <rect fill="url(#e77df901-b9d7-4b9b-822e-16b2d410795b)" width="52" height="24"></rect>
                  </svg>
                  <span class="relative text-accent">Bookmark</span>
                </span >

                <span class="bg-gradient-to-r from-accent to-secondary bg-clip-text text-transparent">Search Engine</span>
              </h3>
              <p class="text-textc md:text-md text-base md:ml-1">
                Smarter Search. Visualise Results. Faster Insights.
              </p>
            </div>
          </div>

          <img class="absolute bottom-0 left-0 z-10 h-full w-full object-cover" src="{{ asset('storage/assets/img/bg.png') }}">
      </div>
    @endsection

    @section('content')
        <x-welcome/>
    @endsection


    @auth
        @yield('content')
    @else
        @yield('hero')
    @endauth

</x-app-layout>
