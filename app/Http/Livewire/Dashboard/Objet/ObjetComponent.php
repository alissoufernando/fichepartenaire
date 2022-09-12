<?php

namespace App\Http\Livewire\Dashboard\Objet;

use App\Models\objectPartener;
use Livewire\Component;

class ObjetComponent extends Component
{

    public $name;
    public $objet_id;
    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteObjet'];




    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['name','objet_id']);
    }


    public function updated($fields)
    {
        if ($this->objet_id) {
            $this->validateOnly($fields, [
                'name' =>  ['required']
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' =>  ['required']

        ]);
    }

    }
    public function saveObjet()
    {
        if ($this->objet_id) {
            $this->validate([
                'name' =>  ['required']
            ]);
        } else {
            $this->validate([
                'name' =>  ['required']
            ]);
        }
        $myObjet = new objectPartener();
        if ($this->objet_id) {
            $myObjet = objectPartener::findOrFail($this->objet_id);
        }
        $myObjet->name = $this->name;

        $myObjet->save();

        if ($this->objet_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        $this->resetInputFields();
        $this->emit('saveObjet');
    }

    public function getElementById($id)
    {
        $this->objet_id = $id;
        $myObjet = objectPartener::findOrFail($this->objet_id);
        $this->name = $myObjet->name;
    }


    public function deleteType($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteTypes()
    {
        $myObjet = objectPartener::findOrFail($this->deleteIdBeingRemoved);
        $myObjet->delete();
        $this->dispatchBrowserEvent('deleted',['message' => 'Cet object à été supprimer']);

    }

    public function render()
    {
        $objets = objectPartener::all();
        return view('livewire.dashboard.objet.objet-component',[
            'objets' => $objets,
        ]);
    }
}
