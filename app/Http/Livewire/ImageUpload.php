<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Gallery;

class ImageUpload extends Component
{

    use WithFileUploads;

    public $images = [];

    public function uploadImages(){

        $this->validate([
            'images.*' => 'image|max:1024',
        ]);
        foreach ($this->images as $image){
            $image->store('public/uploaded_images');
        }

    }

    public function render(){

        return view('livewire.image-upload');

    }
}
