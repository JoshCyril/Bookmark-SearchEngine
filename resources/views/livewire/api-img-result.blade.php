
<div>
    @if($responseData)
    <div class="p-2 md:p-4">
        <div class="columns-1 gap-2 md:gap-4 sm:columns-2 lg:columns-3 [&>div:not(:first-child)]:mt-2 lg:[&>div:not(:first-child)]:mt-4">

            @foreach ($responseData as $el)
            <div class="group relative w-full cursor-pointer overflow-hidden rounded-md">
                <div class="pt-30 absolute inset-x-0 -bottom-2 z-50 flex cursor-pointer items-end rounded-xl bg-gradient-to-t from-black to-transparent text-white opacity-0 transition duration-300 ease-in-out group-hover:opacity-100">
                    <div>
                        <div class="flex translate-y-2 transform transform-gpu items-center gap-3 space-y-3 p-4 pb-5 transition duration-300 ease-in-out group-hover:translate-y-0 group-hover:opacity-100">
                                <div class="avatar h-9 w-9">
                                    <img src="{{ $el['favicon'] }}" alt=" "/>
                                </div>
                                <div class="flex-col">
                                    <p class="text-md font-bold">{{ $el['uri'] }}</p>
                                    <a class="link-hover link text-sm" href="{{ $el['url']}}" target=”_blank”>{{ $el['url'] }}</a>
                                </div>
                        </div>
                    </div>
                </div>
                <img
                    alt="image"
                    class="aspect-square w-full object-cover transition duration-300 ease-in-out group-hover:scale-110"
                    src="{{ $el['image'] }}" />
            </div>
            @endforeach

        </div>
    </div>
    @endif
</div>
