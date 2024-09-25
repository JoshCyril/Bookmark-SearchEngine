<div>
    <select class="select select-bordered select-sm w-full max-w-xs" wire:model="selectedValue" wire:change="change">
        <option selected disabled>Collections</option>
            @foreach(Auth::user()->collections as $collection)
                <option value="{{ $collection->id }}" >{{ $collection->title}}</option>
            @endforeach
    </select>
</div>
