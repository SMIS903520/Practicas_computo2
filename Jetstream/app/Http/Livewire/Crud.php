<?php

namespace App\Http\Livewire;
use App\Models\pet;

use Livewire\Component;

class Crud extends Component
{
    public function index()
    {

        $pets = pet::all();
        return view('livewire.crud', compact('pets'));
    }
    
    
}


