<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Login extends Component
{
    public $email,$password;

    protected $rules = [
        'email'=>'required|email',
        'password'=>'required|min:8'
    ];

    protected $message =[
        'email.email'=>'Enter the Valid Email Address',
        'password'=>'Enter the password'
    ];

    public function updated($value)
    {
        $this->validateOnly($value);
    }

    public function loginForm(Request $request)
    {
        $this->validate();
        dd($request);
    }

    public function render()
    {
        return view('livewire.login')->extends('Auth.master')->section('content');
    }
}
