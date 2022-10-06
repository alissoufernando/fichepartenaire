<?php

namespace App\Http\Livewire\Dashboard\Role;

use App\Models\Role;
use Livewire\Component;

class RoleComponent extends Component
{
    public $nom;
    public $role_id;
    public $deleteIdBeingRemoved = null;
    protected $listeners = ['deleteConfirmation' => 'deleteRoles'];




    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['nom','role_id']);
    }


    public function updated($fields)
    {
        if ($this->role_id) {
            $this->validateOnly($fields, [
                'nom' =>  ['required']
            ]);
        } else {
            $this->validateOnly($fields, [
                'nom' =>  ['required']

        ]);
    }

    }
    public function saveRole()
    {
        if ($this->role_id) {
            $this->validate([
                'nom' =>  ['required']
            ]);
        } else {
            $this->validate([
                'nom' =>  ['required']
            ]);
        }
        $myRole = new Role();
        if ($this->role_id) {
            $myRole = Role::findOrFail($this->role_id);
        }
        $myRole->nom = $this->nom;

        $myRole->save();

        if ($this->role_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
        $this->resetInputFields();
        $this->emit('saveRole');
    }

    public function getElementById($id)
    {
        $this->role_id = $id;
        $myRole = Role::findOrFail($this->role_id);
        $this->nom = $myRole->nom;
    }


    public function deleteRole($id)
    {
        $this->deleteIdBeingRemoved = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteRoles()
    {
        $myRole = Role::findOrFail($this->deleteIdBeingRemoved);
        $myRole->delete();
        $this->dispatchBrowserEvent('deleted',['message' => 'Ce role à été supprimer']);

    }
    public function render()
    {
        $roles = Role::all();
        return view('livewire.dashboard.role.role-component',[
            'roles' => $roles,
        ]);
    }
}
