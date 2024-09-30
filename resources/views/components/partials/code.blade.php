@php
    $value = $res['distances']; // Your input value

    // Check if the value is 0, if so return 100%

    $percentage = round(-(($value*100)-100))

@endphp

<div class="relative z-10 p-4 overflow-hidden card-body">
    @if ($percentage === 100)
        <div class="absolute top-0 right-0">
            <div class="absolute w-32 h-8 -right-8 top-4">
                <div class="w-full h-full text-base font-bold leading-8 text-white transform rotate-45 bg-secondary">Best</div>
            </div>
        </div>
    @elseif ($percentage < 100 and $percentage >= 50)
        <div class="absolute top-0 right-0">
            <div class="absolute w-32 h-8 -right-8 top-4">
                <div class="w-full h-full text-base font-bold leading-8 text-white transform rotate-45 bg-accent">{{ $percentage }}%</div>
            </div>
        </div>
    @endif


    <div class="flex items-center gap-3">
        <div class="w-8 h-8 avatar">
            <img src="{{ $res['metadatas']['favicon'] }}" alt=" "/>
        </div>
        <div class="flex-col">
            <p class="font-bold text-md"> {{ $res['metadatas']['uri'] }}</p>
            <a class="text-sm link-hover link" href="{{ $res['metadatas']['url'] }}" target=”_blank”>{{ $res['metadatas']['url'] }}</a>
        </div>

    </div>
    <x-markdown>
        {{ $res['documents'] }}
    </x-markdown>
</div>
