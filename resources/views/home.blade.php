<x-app-layout>

    @section('hero')

    <div class="mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
          <div class="mb-16 flex flex-col sm:mb-0 sm:text-center">
            <a href="/" class="mb-6 sm:mx-auto">
              <div class="bg-primary-50 flex h-12 w-12 items-center justify-center rounded-full">
                <svg class="text-primary h-10 w-10" stroke="currentColor" viewBox="0 0 52 52">
                  <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                </svg>
              </div>
            </a>
            <div class="mb-10 max-w-xl sm:text-center md:mx-auto md:mb-12 lg:max-w-2xl">
              <h2 class="mb-6 max-w-lg font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                  <svg viewBox="0 0 52 24" fill="currentColor" class="absolute left-0 top-0 z-0 -ml-20 -mt-8 hidden w-32 text-purple-300 sm:block lg:-ml-28 lg:-mt-10 lg:w-32">
                    <defs>
                      <pattern id="e77df901-b9d7-4b9b-822e-16b2d410795b" x="0" y="0" width=".135" height=".30">
                        <circle cx="1" cy="1" r=".7"></circle>
                      </pattern>
                    </defs>
                    <rect fill="url(#e77df901-b9d7-4b9b-822e-16b2d410795b)" width="52" height="24"></rect>
                  </svg>
                  <span class="relative">Welcome</span>
                </span>
                to Kite 🪁
              </h2>
              <p class="text-base text-gray-700 md:text-lg">
                Find your best quote & share it here.
              </p>
            </div>
          </div>
        </div>
      </div>
    @endsection


</x-app-layout>
