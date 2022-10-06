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

class ModifierPartenariatComponent extends Component
{
    public $entitled, $year_of_execution, $partner_id, $uac_structure_id = [],$uac_structure_n = 0, $uac_entitie_id=[], $uac_entitie_n =0, $resultat;
    public $partenaire_id,  $type_id, $object_partener_id=[], $year_signature, $year_collect, $suggestions, $difficults;
    public $email, $phone, $phone_whatsapp, $identite, $poste , $id_otherInfo, $id_activitie, $id_partner,$id_user;

    public $is_whatsapp=0, $nmber=0 ,$nmbResulttat = 1;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['email','phone','phone_whatsapp','id_otherInfo','id_partner','id_user','id_activitie','identite','poste', 'entitled', 'year_of_execution', 'partner_id','uac_structure_id', 'uac_entitie_id', 'resultat','type_id','object_partener_id','difficults', 'suggestions','year_collect','year_signature']);

    }
    public function ajoutResultat(){
        $this->nmbResulttat +=1;
    }
    public function mount($id) {

        $myPartner = partner::where('id', $id)->first();
        $this->id_user = $myPartner->user_id;
        $this->id_partner = $myPartner->id;
        // dd($myPartner->otherInfo->email);
        $this->email = $myPartner->otherInfo->email;
        $this->phone = $myPartner->otherInfo->phone;
            if($myPartner->otherInfo->phone_whatsapp)
            {
                $this->phone_whatsapp = $myPartner->otherInfo->phone_whatsapp;

            }else{
                $this->phone_whatsapp = '';
            }
        $this->identite = $myPartner->otherInfo->identite;
        $this->poste =$myPartner->otherInfo->poste;

        $this->entitled = $myPartner->activitie->entitled;
        $this->year_of_execution =  $myPartner->activitie->year_of_execution;
        $this->uac_structure_id =   explode(",",$myPartner->activitie->uac_structure_id);
        $this->uac_entitie_id = explode(",",$myPartner->activitie->uac_entitie_id);
        $this->resultat =  $myPartner->activitie->resultat;

        $this->id_otherInfo = $myPartner->otherInfo->id;
        $this->id_activitie = $myPartner->activitie->id;
        $this->type_id = $myPartner->type_id;
        $this->object_partener_id = explode(",",$myPartner->object_partener_id);
        $this->partenaire_id = $myPartner->partenaire_id;
        $this->year_signature = $myPartner->year_signature;
        $this->year_collect = $myPartner->year_collect;
        $this->suggestions = $myPartner->suggestions;
        $this->difficults = $myPartner->difficults;

    }

    public function updatePartner()
    {
        $this->validate([

            'partenaire_id' =>  'required',
            'type_id' =>  'required',
            'object_partener_id' =>  'required',
            'year_signature' =>  'required',
            'year_collect' =>  'required',

            'email' =>  'required',
            'phone' =>  'required',
            'identite' =>  'required',
            'poste' =>  'required',
        ]);

            $otherInfo = otherInfo::find($this->id_otherInfo);

            $otherInfo->email = $this->email;
            $otherInfo->phone = $this->phone;
            if($this->phone_whatsapp)
            {
                $otherInfo->phone_whatsapp = $this->phone_whatsapp;

            }else{
                $otherInfo->phone_whatsapp = null;
            }
            $otherInfo->identite = $this->identite;
            $otherInfo->poste = $this->poste;
            $otherInfo->save();


            $activitie = activitie::find($this->id_activitie);

            if($this->nmber == 0)
            {
                $activitie->entitled = null;
                $activitie->year_of_execution = null;
                $activitie->uac_structure_id = null;
                $activitie->uac_entitie_id = null;
                $activitie->resultat = null;
                $activitie->save();
            }else{
                $activitie->entitled = $this->entitled;
                $activitie->year_of_execution = $this->year_of_execution;
                $activitie->uac_structure_id = implode(",",$this->uac_structure_id);
                $activitie->uac_entitie_id = implode(",",$this->uac_entitie_id);
                $activitie->resultat = $this->resultat;
                $activitie->save();
            }


            $partner = partner::find($this->id_partner);

            // dd($id_otherInfo->id, $id_activitie->id);
            $partner->other_info_id = $this->id_otherInfo;
            $partner->activitie_id = $this->id_activitie;
            $partner->type_id = $this->type_id;
            $partner->user_id = $this->id_user;
            $partner->object_partener_id = implode(",",$this->object_partener_id);
            $partner->partenaire_id = $this->partenaire_id;
            $partner->year_signature = $this->year_signature;
            $partner->year_collect = $this->year_collect;
            $partner->suggestions = $this->suggestions;
            $partner->difficults = $this->difficults;
            $partner->save();

            session()->flash('message', 'Modification effectuée avec succès.');
            $this->resetInputFields();

    }

    public function render()
    {
        $formations = uacEntitie::all();
        $objets = objectPartener::all();
        $partenaires = partenaire::all();
        $structures = uacStructure::all();
        $types = type::all();
        return view('livewire.site.partenariat.modifier-partenariat-component',[
            'formations' => $formations,
            'objets' => $objets,
            'partenaires' => $partenaires,
            'structures' => $structures,
            'types' => $types
        ]);
    }
}
