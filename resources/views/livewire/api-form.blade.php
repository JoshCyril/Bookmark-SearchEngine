<div>
    <form wire:submit.prevent="submit">
        <div class="flex justify-center gap-2">
            <label class="input input-bordered input-primary flex w-8/12 items-center">
                <x-iconpark-search class="btn-info h-6 w-6 text-primary" />
                <input type="text" wire:model="search_text" placeholder="Bookmark: title, url, description" class="input-lg w-full"/>
            </label>
            <button type="submit" class="btn btn-primary font-bold uppercase">Search</button>
        </div>
    </form>
</div>
