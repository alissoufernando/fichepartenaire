<?php

namespace App\Http\Livewire\Dashboard\Type;

use App\Models\type;
use Livewire\Component;

class TypePatenariatComponent extends Component
{
    public $name;
    public $type_id;
    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteTypes'];




    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['name','type_id']);
    }


    public function updated($fields)
    {
        if ($this->type_id) {
            $this->validateOnly($fields, [
                'name' =>  ['required','unique:coupons']
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' =>  ['required','unique:coupons']

        ]);
    }

    }
    public function saveType()
    {
        if ($this->type_id) {
            $this->validate([
                'name' =>  ['required','unique:coupons']
            ]);
        } else {
            $this->validate([
                'name' =>  ['required','unique:coupons']
            ]);
        }
        $myType = new type();
        if ($this->type_id) {
            $myType = type::findOrFail($this->type_id);
        }
        $myType->name = $this->name;

        $myType->save();

        if ($this->type_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        $this->resetInputFields();
        $this->emit('saveType');
    }

    public function getElementById($id)
    {
        $this->type_id = $id;
        $myType = type::findOrFail($this->type_id);
        $this->name = $myType->name;
    }


    public function deleteType($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteTypes()
    {
        $myType = type::findOrFail($this->deleteIdBeingRemoved);
        $myType->delete();
        $this->dispatchBrowserEvent('deleted',['message' => 'Ce type à été supprimer']);

    }
    public function render()
    {
        $types = type::all();
        return view('livewire.dashboard.type.type-patenariat-component',[
            'types' => $types,
        ]);
    }
}
