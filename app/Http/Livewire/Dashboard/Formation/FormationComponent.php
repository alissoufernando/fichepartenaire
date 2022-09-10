<?php

namespace App\Http\Livewire\Dashboard\Formation;

use App\Models\uacEntitie;
use Livewire\Component;

class FormationComponent extends Component
{

    public $name;
    public $entitie_id;
    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteEntities'];




    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['name','entitie_id']);
    }


    public function updated($fields)
    {
        if ($this->entitie_id) {
            $this->validateOnly($fields, [
                'name' =>  ['required']
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' =>  ['required']

        ]);
    }

    }
    public function saveFormation()
    {
        if ($this->entitie_id) {
            $this->validate([
                'name' =>  ['required']
            ]);
        } else {
            $this->validate([
                'name' =>  ['required']
            ]);
        }
        $myEntitie = new uacEntitie();
        if ($this->entitie_id) {
            $myEntitie = uacEntitie::findOrFail($this->entitie_id);
        }
        $myEntitie->name = $this->name;

        $myEntitie->save();

        if ($this->entitie_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        $this->resetInputFields();
        $this->emit('saveFormation');
    }

    public function getElementById($id)
    {
        $this->entitie_id = $id;
        $myEntitie = uacEntitie::findOrFail($this->entitie_id);
        $this->name = $myEntitie->name;
    }


    public function deleteFormation($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteFormations()
    {
        $myEntitie = uacEntitie::findOrFail($this->deleteIdBeingRemoved);
        $myEntitie->delete();
        $this->dispatchBrowserEvent('deleted',['message' => 'Cette entité à été supprimer']);

    }

    public function render()
    {
        $formations = uacEntitie::all();
        return view('livewire.dashboard.formation.formation-component',[
            'formations' => $formations,
        ]);
    }
}
