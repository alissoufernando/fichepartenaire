<?php

namespace App\Http\Livewire\Site\Partenariat;

use App\Models\partner;
use Livewire\Component;
use App\Models\objectPartener;
use Illuminate\Support\Facades\Auth;

class MesPartenariatComponent extends Component
{
    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deletePartners'];

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
        $partners = partner::where('user_id', Auth::user()->id)->get();
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
        // dd($partners->activitie_id);
        return view('livewire.site.partenariat.mes-partenariat-component',[
            'partners' => $partners,
        ]);
    }
}
