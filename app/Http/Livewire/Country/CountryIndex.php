<?php

namespace App\Http\Livewire\Country;

use Livewire\Component;
use App\Models\Country;

class CountryIndex extends Component
{
    public $search = '';
    public $countryId;
    public $country_code;
    public $name;
    public $editMode = false;

    protected $rules = [
        'country_code' =>'required',
        'name' => 'required'
    ];

    public function showCountryModal(){
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId'=>'#countryModal', 'actionModal'=>'show']);
    }

    public function showEditModal($id){
        $this->reset();
        $this->editMode = true;
        $this->countryId = $id;
        $country = Country::find($id);
        $this->country_code = $country->country_code;
        $this->name = $country->name;
        $this->dispatchBrowserEvent('modal', ['modalId'=> '#countryModal', 'actionModal'=>'show']);
    }
    public function closeModal(){
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' =>'#countryModal', 'actionModal' => 'hide']);

    }
    public function storeCountry(){
        $this->validate();
        Country::create([
            'country_code' => $this->country_code,
            'name' => $this->name
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId'=>'#countryModal', 'actionModal'=>'hide']);
        session()->flash('country-message', 'Country added succesfully');
        $this->closeModal();
    }
    public function updateCountry(){
        $validated = $this->validate([
            'country_code' => 'required',
            'name' => 'required'
        ]);
        $country = Country::find($this->countryId);
        $country->update($validated);
        session()->flash('country-message', 'Country updated succefully');
        $this->closeModal();
    }
    
   
    public function deleteCountry($id){
        $country = Country::find($id);
        $country->delete();
        session()->flash('country-message', 'Country deleted successfully');
    }
    public function render()
    {
        $countries = Country::all();
        if(strlen($this->search) > 2){
            $countries = Country::where('name', 'like', "%{$this->search}%")->get();
        }

        return view('livewire.country.country-index',[
            'countries' => $countries
        ])->layout('layouts.main');
    }
}
