{{-- @props([$colAuth]) --}}
<div role="tablist" class="tabs tabs-lifted tabs-sm w-full px-8">
    <input type="radio" name="my_tabs_1" role="tab" class="tab [--tab-border-color:green]" aria-label="Aa | Text" checked="checked" />
    <div role="tabpanel" class="tab-content w-full p-10">
        {{-- Text Search --}}

        @livewire('api-form', ['colAuth'=>$colAuth])

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

        @livewire('image-upload', ['colAuth'=>$colAuth])

    </div>

    <input type="radio" name="my_tabs_1" role="tab" class="tab [--tab-border-color:green]" aria-label="</> | Code" />
    <div role="tabpanel" class="tab-content p-10">
        {{-- Code Search --}}

        @livewire('api-code-form', ['colAuth'=>$colAuth])

  </div>
</div>
