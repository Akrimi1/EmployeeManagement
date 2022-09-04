<?php

namespace App\Http\Livewire\State;

use Livewire\Component;
use App\Models\State;
use App\Models\Country;

class StateIndex extends Component
{
    public $search = '';
    public $countryId;
    public $stateId;
    public $name;
    public $editMode = false;

    protected $rules = [
        'countryId' =>'required',
        'name' => 'required'
    ];

    public function showStateModal(){
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId'=>'#stateModal', 'actionModal'=>'show']);
    }

    public function showEditModal($id){
        $this->reset();
        $this->editMode = true;
        $this->stateId = $id;
        $state = State::find($id);
        $this->countryId = $state->country_id;
        $this->name = $state->name;
        $this->dispatchBrowserEvent('modal', ['modalId'=> '#stateModal', 'actionModal'=>'show']);
    }
    public function closeModal(){
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' =>'#stateModal', 'actionModal' => 'hide']);

    }
    public function storeState(){
        $this->validate();
        State::create([
            'country_id' => $this->countryId,
            'name' => $this->name
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId'=>'#stateModal', 'actionModal'=>'hide']);
        session()->flash('state-message', 'State added successfully');
        $this->closeModal();
    }
    public function updateState(){
        $validated = $this->validate([
            'countryId' => 'required',
            'name' => 'required'
        ]);
        $state = State::find($this->stateId);
        $state->update($validated);
        session()->flash('state-message', 'State updated succefully');
        $this->closeModal();
    }
    
   
    public function deleteState($id){
        $state = State::find($id);
        $state->delete();
        session()->flash('state-message', 'State deleted successfully');
    }
    public function render()
    {
        $states = State::all();
        $countries = Country::all();
        if(strlen($this->search) > 2){
            $states = State::where('name', 'like', "%{$this->search}%")->get();
        }

        return view('livewire.state.state-index', [
            'states' => $states,
            'countries' => $countries
        ])->layout('layouts.main');
    }
}
