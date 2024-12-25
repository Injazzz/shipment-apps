<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $confirm_password, $agreement;
    public function render()
    {

        return view('livewire.auth.register')
            ->layout('components.landing-layout');
    }

    public function rules () {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'agreement' => ['required'],
            'confirm_password' => ['same:password'],
        ];
    }

    public function registerUser() {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'agreement' => $this->agreement
        ]);

        Auth::login($user, true);
        return redirect()->to('login');
    }
}
