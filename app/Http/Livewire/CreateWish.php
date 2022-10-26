<?php

namespace App\Http\Livewire;

use App\Models\Wishes;
use Livewire\Component;

class CreateWish extends Component
{
    public $name;
    public $comment;

    public function render()
    {
        return view('livewire.create-wish');
    }

    public function createWish(){
        Wishes::create([
            'wedding_id' => 1,
            'name' => $this->name,
            'comment' => $this->comment
        ]);

        $this->name = "";
        $this->comment = "";
        $this->emit('wishCreated');
    }
}
