<div class="col-span-3 grid w-full gap-4">
    @if($responseData)
        @foreach ($responseData as $res)
        {{-- @dd( $res['metadatas']) --}}
            @if($res['metadatas']['uri'] !== "Invalid URL")
                <div class="card bg-base-100 shadow-xl">
                    <x-partials.card :res="$res"/>
                </div>
            @endif
        @endforeach
    @else
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body z-10 p-4">
                <div class="flex items-center gap-3">
                    <p>No data available yet. Submit the form to see the result.</p>
                </div>
            </div>
        </div>
    @endif
</div>
