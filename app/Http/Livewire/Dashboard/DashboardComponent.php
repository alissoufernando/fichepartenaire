<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\type;
use App\Models\User;
use App\Models\partner;
use Livewire\Component;
use App\Models\partenaire;
use App\Models\uacEntitie;
use App\Models\uacStructure;
use App\Models\objectPartener;

class DashboardComponent extends Component
{

    public function render()
    {
        $formation = uacEntitie::all();
        $objet = objectPartener::all();
        $partenaire = partenaire::all();
        $structure = uacStructure::all();
        $type = type::all();
        $user = User::latest()->get();
        $partenariat = partner::all();
        return view('livewire.dashboard.dashboard-component',[
            'formation' => $formation,
            'objet' => $objet,
            'structure' => $structure,
            'partenaire' => $partenaire,
            'type' => $type,
            'user' => $user,
            'partenariat' => $partenariat,
        ]);
    }
}
