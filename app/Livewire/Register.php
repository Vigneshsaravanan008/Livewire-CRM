<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Register extends Component
{
    public $name,$email,$password,$confirm_password;

    protected $rules = [
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:8',
        'confirm_password'=>'required|confirmed|min:8'
    ];

    protected $message =[
        'name'=>'Enter the Name',
        'email.email'=>'Enter the Valid Email Address',
        'password'=>'Enter the password',
        'confirm_password'=>'Enter the Confirm Password',
    ];

    public function updated($value)
    {
        $this->validateOnly($value);
    }

    public function registerForm(Request $request)
    {
        $this->validate();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
        $user=User::where('email',$this->email)->first();
        Auth::login($user);
        return redirect()->route('user.dashboard');
    }

    public function render()
    {
        return view('livewire.register')->extends('Auth.master')->section('content');
    }
}
