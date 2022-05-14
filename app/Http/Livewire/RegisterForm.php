<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $plan_type;


    protected $listeners = ['signupStep1' => 'signupStep1'];


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
        }
    }

}
