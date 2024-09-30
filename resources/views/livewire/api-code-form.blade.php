<div class="relative flex justify-center">
    <form wire:submit.prevent="submit">
    <div class="mockup-code mt-0 w-7/12 p-4 text-left outline outline-1 outline-primary">
        <div class="absolute right-2 top-2 z-10 flex">

            {{-- <button class="btn btn-sm" onclick="my_modal_5.showModal()">
                <x-feathericon-edit class="btn-info h-6 w-6" />
            </button> --}}
            <button class="btn btn-primary btn-sm font-bold uppercase" type="submit" >Search</button>
        </div>

        <textarea wire:model="search_code" class="textarea textarea-bordered h-24 w-full" placeholder="// Code Here">
            print('hello world');
        </textarea>

@livewire('api-code-save')
</div>

    {{-- <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <label class="form-control">
                <div class="label">
                    <span class="label-text">Edit your code here...</span>
                </div>
                <textarea wire:model="search_code" class="textarea textarea-bordered h-24 w-full" placeholder="// Code Here">
                print('hello world');
                </textarea>
                </label>

            <div class="modal-action">
            <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn" type="submit">Save & Close</button>
            </form>
            </div>
        </div>
    </dialog> --}}
</form>
</div>
