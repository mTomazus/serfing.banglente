<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{

    use WithFileUploads;

    public $image;

    public function upload(){
        $this->validate([
            'image' => 'image|max:1024',
        ]);
        $this->image->store('uploaded_images');
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
