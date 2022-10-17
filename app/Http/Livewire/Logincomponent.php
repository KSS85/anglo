<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logincomponent extends Component
{

    public function mount()
    {
        Auth::logout();
        return redirect()->to('/login');
    }
    public function render()
    {
        return view('livewire.logincomponent');
    }
}
