<?php

namespace App\Http\Livewire\Site\Partenariat;

use App\Models\partner;
use Livewire\Component;
use App\Models\objectPartener;

class AllPartenariatComponent extends Component
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
        return view('livewire.site.partenariat.all-partenariat-component',[
            'partners' => $partners,
        ]);
    }
}
