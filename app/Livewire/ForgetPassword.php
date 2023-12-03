<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ForgetPassword extends Component
{
    public $email;

    protected $rules = [
        'email'=>'required|email',
    ];

    protected $message =[
        'email.email'=>'Enter the Valid Email Address',
    ];

    public function updated($value)
    {
        $this->validateOnly($value);
    }

    public function render()
    {
        return view('livewire.forget-password')->extends('Auth.master')->section('content');
    }

    public function forgetForm(Request $request)
    {
        $this->validate();
    }
}
