<?php

namespace App\Http\Livewire\AdminPanel;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-panel.dashboard')->layout('admin_dashboard');
    }
}
