<?php

namespace App\Http\Livewire\Users;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

use Livewire\Component;

class UserIndex extends Component
{
    use WithPagination;

    public $search = '';
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $userId;
    public $editMode = false;

    protected $rules = [
        "username" => 'required',
        "firstname" => 'required',
        "lastname" => 'required',
        "email" => 'required|email',
        "password" => 'required'
    ];

    public function storeUser(){
        $this->validate();
        User::create([
            'username' => $this->username,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'hide']);
    }
    public function showUserModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'show']);
    }

    public function showEditModal($id){
        $this->reset();
        $this->editMode = true;
        $this->userId = $id;
        //load User
        $user = User::find($id);
        $this->username = $user->username;
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->email = $user->email;
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'show']);
    }

    public function updateUser(){
        $validated = $this->validate ([
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email'
        ]);
        $user = User::find($this->userId);
        $user->update($validated);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'show']);
        //flash message
        session()->flash('user-message', 'User successfully Updated');
        $this->closeModal();
    }
    public function closeModal()
    {
        $this->dispatchBrowserEvent('modal', ['modalId' => '#userModal', 'actionModal' => 'hide']);
        $this->reset();
    }

    public function deleteUser($id){

        $user = User::find($id);
        $user->delete();
        //flash message
        session()->flash('user-message', 'User successfully Deleted');
    }

    public function render()
    {
        $users = User::all();
        
        if (strlen($this->search) > 2) {
            $users = User::where('username', 'like', "%{$this->search}%")->get();
        }
        return view('livewire.users.user-index', [
            'users' => $users
        ])
        ->layout('layouts.main');
    }
}
