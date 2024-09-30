<div class="grid w-full gap-4">
    @if($responseData)
        @foreach ($responseData as $res)
        {{-- @dd( $res['metadatas']) --}}
            @if($res['metadatas']['uri'] !== "Invalid URL")
                <div class="card bg-base-100 shadow-xl">
                    <x-partials.card :res="$res"/>
                </div>
            @endif
        @endforeach
    @endif
</div>
