<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $image;
    public $uploadedImagePath;

    // Validation rules for the file input
    protected $rules = [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Only image formats are allowed
    ];

    public function updatedImage()
    {
        // Validate the image as soon as it is uploaded
        $this->validate();
    }

    public function save()
    {
        // Re-validate the image before saving
        $this->validate();

        // Define the new image name with a timestamp or unique identifier
        $newFileName = 'search-img' . '.' . $this->image->getClientOriginalExtension();

        // Store the image with the new name
        $this->uploadedImagePath = $this->image->storeAs('images', $newFileName, 'public');

        // Flash the image name to the session or use component state
        session()->flash('imageName', $this->uploadedImagePath);
    }

    public function removeImage()
    {
        // Delete the uploaded image from storage
        if ($this->uploadedImagePath) {
            Storage::disk('public')->delete($this->uploadedImagePath);
        }

        // Reset image data
        $this->uploadedImagePath = null;
        $this->image = null;

        // Clear the session flash data if using it
        session()->forget('imageName');
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
