<?php

namespace App;
use Livewire\Component;
use Livewire\WithFileUploads;
class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;

    public function save($field)
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store($field);
    }
}
