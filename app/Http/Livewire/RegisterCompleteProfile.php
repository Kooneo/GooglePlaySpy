<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterCompleteProfile extends Component
{
    public $first_name;
    public $last_name;
    public $username;
    public $email;
    public $plan_type;
    public $password;


    protected $listeners = [
        'RegisterStep1Complete' => 'onRegisterStep1Complete',
    ];


    protected $rules = [
        'username' => 'required|string|max:255',
        'password' => 'required|string|max:255',
    ];


    public function onRegisterStep1Complete($data)
    {
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->email = $data['email'];
        $this->plan_type = $data['plan_type'];
    }

    public function render()
    {
        return view('livewire.register-complete-profile');
    }

    public function submit()
    {
        if ($this->validate()) {
            $user = User::query()->create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'username' => $this->username,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'plan_type' => $this->plan_type,
            ]);

            auth()->login($user);
            return redirect()->route('home');
        }
    }
}
