<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $image;
    public $uploadedImagePath;
    public $colAuth;

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

        // API URL
        $apiBase = "http://host.docker.internal:3000";
        $apiUrl = $apiBase.'/search/image';

        // $query = $this->urlToBase64(asset('storage/'. $this->uploadedImagePath));
        // $query = asset('storage/'. $this->uploadedImagePath);
        $query = "https://media.geeksforgeeks.org/auth-dashboard-uploads/gfgFooterLogo.png";

        // dd($query);

        // Call the API
        $response = Http::post($apiUrl, [
            'query' => $query,
            'count' =>  6,
            'coll' => $this->colAuth,
            // 'coll' => "E0c0q1",
            'isBase64' =>  false
        ]);

        $responseData = $response->json();

        // Emit the result to the Result component
        $this->dispatch('apiReceivedImg', $responseData);
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

    function urlToBase64($imagePath) {

        // Get the image file contents
        $imageData = file_get_contents($imagePath);

        // Encode the image data to base64
        $base64 = base64_encode($imageData);

        return $base64;
    }

    // function urlToBase64($url)
    // {
    //     // Make the HTTP request
    //     $response = Http::get($url);

    //     // Check if the request was successful
    //     if ($response->successful()) {
    //         // Get the body of the response
    //         $imageData = $response->body();

    //         // Encode the image data to base64
    //         $base64 = base64_encode($imageData);

    //         return $base64;
    //     } else {
    //         // Handle error
    //         return "Failed to fetch the URL. Status code: " . $response->status();
    //     }
    // }


}
