<div>
    <select class="w-full max-w-xs select select-bordered select-sm" wire:model="selectedValue" wire:change="change">
        <option selected disabled>Collections</option>
        @foreach(Auth::user()->collections as $collection)
            <option value="{{ $collection->id }}" >{{ $collection->title}}</option>
        @endforeach
    </select>
</div>
