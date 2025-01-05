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
            ->extends('layouts.landing');
    }

    public function rules () {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'confirm_password' => ['same:password'],
            'agreement' => ['required', 'accepted'],
        ];
    }

    public function registerUser() {
        $this->validate();

         // Debugging untuk cek nilai $this->agreement
        if ($this->agreement) {
            logger('Agreement is true');
        } else {
            logger('Agreement is false');
        }

        $path = '49.png';

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'agreement' => $this->agreement ? 1 : 0, // Simpan sebagai angka
            'profile_photo' => $path,
        ]);

        Auth::login($user, true);
        return redirect()->to('login');
    }
}
