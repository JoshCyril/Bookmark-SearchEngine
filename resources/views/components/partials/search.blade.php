<div role="tablist" class="tabs tabs-lifted tabs-sm w-full px-8">
    <input type="radio" name="my_tabs_1" role="tab" class="tab [--tab-border-color:green]" aria-label="Aa | Text" checked="checked" />
    <div role="tabpanel" class="tab-content w-full p-10">
        {{-- Text Search --}}

        @livewire('api-form')

    </div>

    <input
      type="radio"
      name="my_tabs_1"
      role="tab"
      class="tab [--tab-border-color:green]"
      aria-label="🖼️ | Image"
      />
    <div role="tabpanel" class="tab-content p-10">
        {{-- Image Search --}}

        <div class="flex justify-center gap-2">
            <input
            type="file"
            class="file-input file-input-bordered w-full max-w-xs outline outline-1 outline-primary" />

            <button class="btn btn-primary font-bold uppercase">Search</button>

        </div>

    </div>

    <input type="radio" name="my_tabs_1" role="tab" class="tab [--tab-border-color:green]" aria-label="</> | Code" />
    <div role="tabpanel" class="tab-content p-10">
        {{-- Code Search --}}
        <div class="relative flex justify-center">

            <div class="mockup-code mt-0 w-7/12 p-4 text-left outline outline-1 outline-primary">
                <div class="absolute right-2 top-2 z-10 flex">
                    <button class="btn btn-sm" onclick="my_modal_5.showModal()">
                        <x-feathericon-edit class="btn-info h-6 w-6" />
                    </button>
                    <button class="btn btn-primary btn-sm font-bold uppercase">Search</button>
                </div>



                <pre><code>without prefixThere</code></pre>
                <pre><code>    There</code></pre>
                <pre><code>without </code></pre>
            </div>

            <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <label class="form-control">
                        <div class="label">
                            <span class="label-text">Edit your code here...</span>
                        </div>
                        <textarea class="textarea textarea-bordered h-24 w-full" placeholder="// Code Here"></textarea>
                        </label>

                    <div class="modal-action">
                    <form method="dialog">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn">Save & Close</button>
                    </form>
                    </div>
                </div>
            </dialog>

        </div>

  </div>
</div>
