<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Livewire;

class RegisterForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $plan_type;


    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'plan_type' => 'required|integer',
    ];



    public function render()
    {
        return view('livewire.register-form');
    }

    public function submit() {
        if ($this->validate()) {

            $this->dispatchBrowserEvent('readyToNextStep');

            $this->emitTo('register-complete-profile', "RegisterStep1Complete" , [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'plan_type' => $this->plan_type,
            ]);


        }
    }

}
