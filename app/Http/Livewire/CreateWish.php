<?php

namespace App\Http\Livewire;

use App\Models\Wishes;
use Illuminate\Http\Request;
use Livewire\Component;

class CreateWish extends Component
{
    public $name;
    public $comment;

    public function mount(Request $request)
    {
        $this->name = $request->to;
    }

    public function render(Request $request)
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
