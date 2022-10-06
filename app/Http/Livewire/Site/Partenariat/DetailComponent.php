<?php

namespace App\Http\Livewire\Site\Partenariat;

use App\Models\partner;
use Livewire\Component;
use App\Models\objectPartener;

class DetailComponent extends Component
{
    public $mypartenarit;
    public function mount($id) {
        $this->mypartenarit = $id;
    }
    public function render()
    {
        $All_object =[];
        $partner = partner::where('id', $this->mypartenarit)->first();
        $partner->object_partener_id = explode(',', $partner->object_partener_id);
        $objects = objectPartener::whereIn('id', $partner->object_partener_id)->get();
        foreach($objects as $object)
        {
            array_push($All_object, $object->name);

        }
        $partner->object_partener_id = implode(', ', $All_object);
        // dd($partner);

        return view('livewire.site.partenariat.detail-component',[
            'partner' => $partner,
        ]);
    }
}
