<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::guard('web')->attempt(['email'=>$this->email, 'password'=>$this->password]))
        {
            return redirect()->route('user.dashboard');
        }else{
            if(User::where('email',$this->email)->exists())
            {
                $this->dispatch('checkPassword',message: 'Password is Incorrect',parameter:'Password');
                return true;
            }else{
                $this->dispatch('checkPassword',message: 'Email is Incorrect',parameter:'Email');
                return true;
            }
        }
    }

    public function mount()
    {
        if(Auth::check())
        {
            return redirect()->route('user.dashboard');
        }
    }

    public function render()
    {
        return view('livewire.login')->extends('Auth.master')->section('content');
    }
}
