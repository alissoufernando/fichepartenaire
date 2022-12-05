<?php

namespace App\Http\Livewire\Site\Partenariat;

use App\Models\partner;
use Livewire\Component;
use App\Models\activitie;
use App\Models\uacEntitie;
use App\Models\uacStructure;
use App\Models\objectPartener;

class AllPartenariatComponent extends Component
{
    public $entitled, $year_of_execution, $partner_id, $uac_structure_id = [],$uac_structure_n =0, $uac_entitie_id=[], $uac_entitie_n=0, $resultat, $resultat_tableau=[], $activitie_id =[];

    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deletePartners'];

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['entitled', 'year_of_execution','uac_structure_id', 'uac_entitie_id', 'resultat','uac_structure_n','uac_entitie_n']);

    }
       // Add une cadre institutionnel

       public function addResultat()
       {
           array_push($this->resultat_tableau,$this->resultat);
            $this->resultat = null;

       }
       // supprimer une cadre institutionnel
       public function delresultat($key)
       {
           unset($this->resultat_tableau[$key]);
       }

    public function addActivite()
    {
        $this->validate([
            'entitled' =>  'required',
            'year_of_execution' =>  'required',
        ]);

        $activitie = new activitie();


        $activitie->entitled = $this->entitled;
        $activitie->year_of_execution = $this->year_of_execution;
        if($this->uac_structure_id)
        {
            $activitie->uac_structure_id = implode(",",$this->uac_structure_id);
        }else{
            $activitie->uac_structure_id = null;
        }
        if($this->uac_entitie_id)
        {
            $activitie->uac_entitie_id = implode(",",$this->uac_entitie_id);
        }else{
            $activitie->uac_entitie_id = null;
        }
        $activitie->uac_entitie_id = implode(",",$this->uac_entitie_id);
        $activitie->resultat = $this->resultat;
        $activitie->save();
        $activitie_ids = activitie::latest()->first()->id;
        array_push($this->activitie_id,$activitie_ids);
        $mypartner = partner::findOrFail($this->partner_id);
        $mypartner->activitie_id = implode(",",$this->activitie_id);
        $mypartner->save();
        $mypartneri = partner::findOrFail($this->partner_id);
        $this->activitie_id =   explode(",",$mypartneri->activitie_id);
        session()->flash('message', 'Enregistrement effectué avec succès.');
        $this->resetInputFields();

    }

    public function getElementById($id)
    {
        $this->partner_id = $id;
        $mypartner = partner::findOrFail($this->partner_id);
        $this->activitie_id =   explode(",",$mypartner->activitie_id);

    }
    public function deletePartner($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deletePartners()
    {
        $myPartner = partner::findOrFail($this->deleteIdBeingRemoved);
        $myPartner->delete();
        $this->dispatchBrowserEvent('deleted',['message' => 'Ce partener à été supprimer']);

    }

    public function render()
    {
        $All_object = [];
        $partners = partner::latest()->get();
        foreach ($partners as $partner)
        {

            $partner->object_partener_id = explode(',', $partner->object_partener_id);
            $objects = objectPartener::whereIn('id', $partner->object_partener_id)->get();
            foreach($objects as $object)
            {
                array_push($All_object, $object->name);

            }
            $partner->object_partener_id = implode(', ', $All_object);

        }
        $structures = uacStructure::all();
        $formations = uacEntitie::all();
        return view('livewire.site.partenariat.all-partenariat-component',[
            'partners' => $partners,
            'formations' => $formations,
            'structures' => $structures,
        ]);
    }
}
