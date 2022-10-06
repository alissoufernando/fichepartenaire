<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class WelcomeComponent extends Component
{
    public function render()
    {
        return view('livewire.auth.login-component',[
            ])->layout('layouts.site');
    }
}
