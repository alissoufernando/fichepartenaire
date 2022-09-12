<?php

namespace App\Http\Livewire\Site\Partenariat;

use App\Models\type;
use App\Models\partner;
use Livewire\Component;
use App\Models\activitie;
use App\Models\otherInfo;
use App\Models\partenaire;
use App\Models\uacEntitie;
use App\Models\uacStructure;
use App\Models\objectPartener;
use Illuminate\Support\Facades\Auth;

class CreationPartenariatComponent extends Component
{
    public $entitled, $year_of_execution, $partner_id, $uac_structure_id, $uac_entitie_id, $resultat;
    public $partenaire_id,  $type_id, $object_partener_id, $year_signature, $year_collect, $suggestions, $difficults;
    public $email, $phone, $phone_whatsapp, $identite, $poste;

    public $is_whatsapp=0, $nmber=0;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['email','phone','phone_whatsapp','identite','poste','name', 'entitled', 'year_of_execution', 'partner_id','uac_structure_id', 'uac_entitie_id', 'resultat','type_id','object_partener_id','difficults', 'suggestions','year_collect','year_signature']);

    }
    public function mount() {
        $this->status_stock = 'instock';
        $this->status = 1;
        $this->featured = 0;
    }
    public function savePartner()
    {
            $this->validate([
                'entitled' =>  'required',
                'year_of_execution' =>  'required',
                'partner_id' =>  'required',
                'uac_structure_id' =>  'required',
                'uac_entitie_id' =>  'required',
                'resultat' =>  'required',

                'partenaire_id' =>  'required',
                'type_id' =>  'required',
                'object_partener_id' =>  'required',
                'year_signature' =>  'required',
                'year_collect' =>  'required',
                'suggestions' =>  'required',
                'difficults' =>  'required',

                'email' =>  'required',
                'phone' =>  'required',
                'phone_whatsapp' =>  'required',
                'identite' =>  'required',
                'poste' =>  'required',
            ]);

        $partner = new partner();

        $partner->type_id = $this->type_id;
        $partner->user_id = Auth::user()->id;
        $partner->object_partener_id = $this->object_partener_id;
        $partner->partenaire_id = $this->partenaire_id;
        $partner->year_signature = $this->year_signature;
        $partner->year_collect = $this->year_collect;
        $partner->suggestions = $this->suggestions;
        $partner->difficults = $this->difficults;
        $partner->save();

        $otherInfo = new otherInfo();
        $id_partner = partner::latest()->first();
        $otherInfo->partner_id = $id_partner->id;
        $otherInfo->email = $this->email;
        $otherInfo->phone = $this->phone;
        $otherInfo->phone_whatsapp = $this->phone_whatsapp;
        $otherInfo->identite = $this->identite;
        $otherInfo->poste = $this->poste;
        $otherInfo->save();

        $activitie = new activitie();

        $activitie->partner_id = $id_partner->id;
        $activitie->entitled = $this->entitled;
        $activitie->year_of_execution = $this->year_of_execution;
        $activitie->uac_structure_id = $this->uac_structure_id;
        $activitie->uac_entitie_id = $this->uac_entitie_id;
        $activitie->resultat = $this->resultat;
        $activitie->save();

       session()->flash('message', 'Enregistrement effectué avec succès.');
       $this->resetInputFields();

    }
    public function changeSubcategory()
    {
        $this->scategorie_id = 0;
    }


    public function render()
    {
        $formations = uacEntitie::all();
        $objets = objectPartener::all();
        $partenaires = partenaire::all();
        $structures = uacStructure::all();
        $types = type::all();
        return view('livewire.site.partenariat.creation-partenariat-component',[
            'formations' => $formations,
            'objets' => $objets,
            'partenaires' => $partenaires,
            'structures' => $structures,
            'types' => $types
        ]);
    }
}
