<?php

namespace App\Http\Livewire\Dashboard\Structure;

use Livewire\Component;
use App\Models\uacStructure;

class StrutureComponent extends Component
{
    public $name;
    public $uacStructure_id;
    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteStructures'];




    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['name','uacStructure_id']);
    }


    public function updated($fields)
    {
        if ($this->uacStructure_id) {
            $this->validateOnly($fields, [
                'name' =>  ['required']
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' =>  ['required']

        ]);
    }

    }
    public function saveStructure()
    {
        if ($this->uacStructure_id) {
            $this->validate([
                'name' =>  ['required']
            ]);
        } else {
            $this->validate([
                'name' =>  ['required']
            ]);
        }
        $myuacStructure = new uacStructure();
        if ($this->uacStructure_id) {
            $myuacStructure = uacStructure::findOrFail($this->uacStructure_id);
        }
        $myuacStructure->name = $this->name;

        $myuacStructure->save();

        if ($this->uacStructure_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        $this->resetInputFields();
        $this->emit('saveStructure');
    }

    public function getElementById($id)
    {
        $this->uacStructure_id = $id;
        $myuacStructure = uacStructure::findOrFail($this->uacStructure_id);
        $this->name = $myuacStructure->name;
    }


    public function deleteStructure($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteStructures()
    {
        $myuacStructure = uacStructure::findOrFail($this->deleteIdBeingRemoved);
        $myuacStructure->delete();
        $this->dispatchBrowserEvent('deleted',['message' => 'Cette structure à été supprimer']);

    }
    public function render()
    {
        $structures = uacStructure::all();
        return view('livewire.dashboard.structure.struture-component',[
            'structures' => $structures,
        ]);
    }
}
