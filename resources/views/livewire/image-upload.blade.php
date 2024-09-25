<div class="flex flex-col items-center justify-center justify-items-center gap-4">
    <div class="flex justify-center gap-2">
        <!-- Form for uploading image -->
        <form wire:submit.prevent="save">
            <input type="file" wire:model="image"
            class="file-input file-input-bordered w-full max-w-xs outline outline-1 outline-primary">

            <!-- Display error message if an invalid file is uploaded -->
            @error('image') <span class="error" style="color:red;">{{ $message }}</span> @enderror

            <button class="btn btn-primary font-bold uppercase" type="submit">Search</button>
        </form>
    </div>


    <!-- Preview the selected image before upload -->
    @if ($image)
        <div id="imagePreviewContainer w-96">
            <img src="{{ $image->temporaryUrl() }}" class="w-96 outline outline-1 outline-primary/20">
        </div>
    @endif

    <!-- Display uploaded image if it exists -->
    {{-- @if ($uploadedImagePath || session('imageName'))
        <div id="uploadedImageContainer">
            <h3>Uploaded Image:</h3>
            <img src="{{ asset('storage/' . ($uploadedImagePath ?? session('imageName'))) }}" alt="Uploaded Image" style="max-width: 300px; max-height: 300px;">

            <button type="button" wire:click="removeImage">Remove Image</button>
        </div>
    @endif --}}

</div>
