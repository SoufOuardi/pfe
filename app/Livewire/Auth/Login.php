<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password, $remember_me = false;
    public $errorMessage;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ], $this->remember_me)) {
            return redirect()->route('dashboard'); // or wherever you want to redirect after login
        }

        // If login fails, display an error
        $this->errorMessage = 'Invalid email or password';
        $this->render();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
