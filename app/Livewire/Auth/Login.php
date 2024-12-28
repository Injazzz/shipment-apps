<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $remember_me;
    public function render()
    {
        return view('livewire.auth.login')
            ->extends('layouts.landing');
    }

      public function rules () {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function loginUser(Request $request) {
        $this->validate();
        if(!Auth::attempt($this->only(['email','password']), $this->remember_me)){
            $this->addError('email', __('auth.failed'));

            return null;
        }

        $request->session()->regenerate(); // Regenerate session untuk keamanan
        return redirect()->to('dashboard/{id}');
    }
}
