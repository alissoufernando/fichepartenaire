<?php

namespace App\Http\Livewire\Site\Partenariat;

use App\Models\activitie;
use App\Models\partner;
use Livewire\Component;
use App\Models\objectPartener;
use App\Models\uacEntitie;
use App\Models\uacStructure;

class DetailComponent extends Component
{
    public $mypartenarit;
    public function mount($id) {
        $this->mypartenarit = $id;
    }
    public function render()
    {
        $All_object =[];
        $All_entite =[];
        $All_structure =[];

        $partner = partner::where('id', $this->mypartenarit)->first();
        $partner->object_partener_id = explode(',', $partner->object_partener_id);
        $partner->activitie_id = explode(',', $partner->activitie_id);
        // dd($partner->activitie_id);

        $activities = activitie::whereIn('id', $partner->activitie_id)->get();

        foreach($activities as $activitie)
        {
            $activitie->uac_structure_id = explode(',', $activitie->uac_structure_id);
            $uacStructures = uacStructure::whereIn('id', $activitie->uac_structure_id)->get();
            foreach($uacStructures as $uacStructure)
            {
                array_push($All_structure, $uacStructure->name);

            }
            $activitie->uac_structure_id = implode(', ', $All_structure);

            $activitie->uac_entitie_id = explode(',', $activitie->uac_entitie_id);
            $uacEntities = uacEntitie::whereIn('id', $activitie->uac_entitie_id)->get();
            foreach($uacEntities as $uacEntitie)
            {
                array_push($All_entite, $uacEntitie->name);

            }
            $activitie->uac_entitie_id = implode(', ', $All_entite);

        }


        $objects = objectPartener::whereIn('id', $partner->object_partener_id)->get();
        foreach($objects as $object)
        {
            array_push($All_object, $object->name);

        }
        $partner->object_partener_id = implode(', ', $All_object);
        // dd($activities);

        return view('livewire.site.partenariat.detail-component',[
            'partner' => $partner,
            'activities'=> $activities,
        ]);
    }
}
