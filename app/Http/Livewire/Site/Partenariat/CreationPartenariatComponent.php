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
    // public $entitled, $year_of_execution, $partner_id, $uac_structure_id = [],$uac_structure_n =0, $uac_entitie_id=[], $uac_entitie_n=0, $resultat;
    public $partenaire_id,  $type_id, $object_partener_id=[], $year_signature, $year_collect, $suggestions, $difficults;
    public $email, $phone, $phone_whatsapp, $identite, $poste;

    public $is_whatsapp=0, $nmber=0 ,$nmbResulttat = 1;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['email','phone','phone_whatsapp','identite','poste','type_id','object_partener_id','difficults', 'suggestions','year_collect','year_signature']);

    }

    public function ajoutResultat(){
        $this->nmbResulttat +=1;
    }

    public function savePartner()
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


            $otherInfo = new otherInfo();
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

            // $activitie = new activitie();
            // // dd($this->resultat);

            // if($this->nmber == 0)
            // {
            //     $activitie->entitled = null;
            //     $activitie->year_of_execution = null;
            //     $activitie->uac_structure_id = null;
            //     $activitie->uac_entitie_id = null;
            //     $activitie->resultat = null;
            //     $activitie->save();
            // }else{
            //     $activitie->entitled = $this->entitled;
            //     $activitie->year_of_execution = $this->year_of_execution;
            //     if($this->uac_structure_id)
            //     {
            //         $activitie->uac_structure_id = implode(",",$this->uac_structure_id);
            //     }else{
            //         $activitie->uac_structure_id = null;
            //     }
            //     if($this->uac_entitie_id)
            //     {
            //         $activitie->uac_entitie_id = implode(",",$this->uac_entitie_id);
            //     }else{
            //         $activitie->uac_entitie_id = null;
            //     }
            //     $activitie->uac_entitie_id = implode(",",$this->uac_entitie_id);
            //     $activitie->resultat = $this->resultat;
            //     $activitie->save();
            // }






            $partner = new partner();
            $id_otherInfo = otherInfo::latest()->first();
            // $id_activitie = activitie::latest()->first();
            // dd($id_otherInfo->id, $id_activitie->id);
            $partner->other_info_id = $id_otherInfo->id;
            // $partner->activitie_id = $id_activitie->id;
            $partner->type_id = $this->type_id;
            $partner->user_id = Auth::user()->id;
            $partner->object_partener_id = implode(",",$this->object_partener_id);
            $partner->partenaire_id = $this->partenaire_id;
            $partner->year_signature = $this->year_signature;
            $partner->year_collect = $this->year_collect;
            $partner->suggestions = $this->suggestions;
            $partner->difficults = $this->difficults;
            $partner->save();


            session()->flash('message', 'Enregistrement effectué avec succès.');
            $this->resetInputFields();
            // return redirect()->route('creation.de.artenariat');

    }
    // public function saveP(array $activities)
    // {
    //     foreach ($activities as $activity)
    //     {
    //         $activitie = new activitie();
    //         $activitie->entitled = $activity->entitled;
    //         $activitie->year_of_execution = $activity->year_of_execution;
    //         if($activity->uac_structure_id)
    //         {
    //             $activitie->uac_structure_id = implode(",",$activity->uac_structure_id);
    //         }else{
    //             $activitie->uac_structure_id = null;
    //         }
    //         if($activity->uac_entitie_id)
    //         {
    //             $activitie->uac_entitie_id = implode(",",$activity->uac_entitie_id);
    //         }else{
    //             $activitie->uac_entitie_id = null;
    //         }
    //         $activitie->uac_entitie_id = implode(",",$activity->uac_entitie_id);
    //         $activitie->resultat = $activity->resultat;
    //         $activitie->save();
    //     }
    // }

    public function render()
    {
        $objets = objectPartener::all();
        $partenaires = partenaire::all();
        $structures = uacStructure::all();
        $formations = uacEntitie::all();
        $types = type::all();
        return view('livewire.site.partenariat.creation-partenariat-component',[
            'objets' => $objets,
            'partenaires' => $partenaires,
            'formations' => $formations,
            'structures' => $structures,
            'types' => $types
        ]);
    }
}
