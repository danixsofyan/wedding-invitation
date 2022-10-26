<?php

namespace App\Http\Livewire;

use App\Models\Wishes;
use Livewire\Component;

class ListWish extends Component
{
    protected $listeners = [
        'wishCreated' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-wish', [
            'wish' => Wishes::orderby('id', 'desc')->get()
        ]);
    }
}
