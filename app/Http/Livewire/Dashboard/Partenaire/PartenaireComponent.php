<?php

namespace App\Http\Livewire\Dashboard\Partenaire;

use App\Models\partenaire;
use Livewire\Component;

class PartenaireComponent extends Component
{
    public $name;
    public $partenaire_id;
    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deletePartenaires'];




    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['name','partenaire_id']);
    }


    public function updated($fields)
    {
        if ($this->partenaire_id) {
            $this->validateOnly($fields, [
                'name' =>  ['required']
            ]);
        } else {
            $this->validateOnly($fields, [
                'name' =>  ['required']

        ]);
    }

    }
    public function savePartenaire()
    {
        if ($this->partenaire_id) {
            $this->validate([
                'name' =>  ['required']
            ]);
        } else {
            $this->validate([
                'name' =>  ['required']
            ]);
        }
        $myPartenaire = new partenaire();
        if ($this->partenaire_id) {
            $myPartenaire = partenaire::findOrFail($this->partenaire_id);
        }
        $myPartenaire->name = $this->name;

        $myPartenaire->save();

        if ($this->partenaire_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        $this->resetInputFields();
        $this->emit('savePartenaire');
    }

    public function getElementById($id)
    {
        $this->partenaire_id = $id;
        $myPartenaire = partenaire::findOrFail($this->partenaire_id);
        $this->name = $myPartenaire->name;
    }


    public function deletePartenaire($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deletePartenaires()
    {
        $myPartenaire = partenaire::findOrFail($this->deleteIdBeingRemoved);
        $myPartenaire->delete();
        $this->dispatchBrowserEvent('deleted',['message' => 'Ce partenaire à été supprimer']);

    }
    public function render()
    {
        $partenaires = partenaire::all();
        return view('livewire.dashboard.partenaire.partenaire-component',[
            'partenaires' => $partenaires,
        ]);
    }
}
