<?php

namespace App\Http\Livewire\UpgradePlan;

use Livewire\Component;

class UpgradeIndex extends Component
{
    
     public function subscribe(){
        $user = auth()->user();
        $user ->charge(1000, $request->payment_method);
    }
    public function render()
    {
        return view('livewire.upgrade-plan.upgrade-index')->layout('layouts.main');
    }
}
