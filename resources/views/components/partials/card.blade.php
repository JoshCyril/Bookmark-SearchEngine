@php
    $value = $res['distances']; // Your input value

    // Check if the value is 0, if so return 100%

    $percentage = round(-(($value*100)-100))

    // if ($value == 0) {
    //     $percentage = 100;
    // } else {
    //     // Convert to percentage and round to nearest integer
    //     $percentage = round($value * 100);
    // }
@endphp

<div class="card-body relative z-10 overflow-hidden p-4">
    @if ($percentage === 100)
        <div class="absolute right-0 top-0">
            <div class="absolute -right-8 top-4 h-8 w-32">
                <div class="h-full w-full rotate-45 transform bg-secondary text-base font-bold leading-8 text-white">Best</div>
            </div>
        </div>
    @elseif ($percentage < 100 and $percentage >= 50)
        <div class="absolute right-0 top-0">
            <div class="absolute -right-8 top-4 h-8 w-32">
                <div class="h-full w-full rotate-45 transform bg-accent text-base font-bold leading-8 text-white">{{ $percentage }}%</div>
            </div>
        </div>
    @endif


    <div class="flex items-center gap-3">
        <div class="avatar h-8 w-8">
            <img src="{{ $res['metadatas']['favicon'] }}" alt=" "/>
        </div>
        <div class="flex-col">
            <p class="text-md font-bold"> {{ $res['metadatas']['uri'] }}</p>
            <a class="link-hover link text-sm" href="{{ $res['metadatas']['url'] }}" target=”_blank”>{{ $res['metadatas']['url'] }}</a>
        </div>

    </div>
    <h2 class="card-title text-primary">
    {{ $res['documents'] }}
    </h2>
    <p>{{ $res['metadatas']['description'] }}</p>

    {{-- <div class="divider"></div> --}}
</div>
