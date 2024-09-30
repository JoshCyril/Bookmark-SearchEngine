<div class="">
    @if($responseData)
        @foreach ($responseData as $res)
        {{-- @dd( $res['metadatas']) --}}
            @if($res['metadatas']['uri'] !== "Invalid URL")
                <div class="card bg-base-100 shadow-xl">
                    <x-partials.code :res="$res"/>
                </div>
            @endif
        @endforeach
    @endif
</div>
