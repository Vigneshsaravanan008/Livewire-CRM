<?php

namespace App\Livewire;

use Livewire\Component;

class Customer extends Component
{
    public function render()
    {
        return view('livewire.customer')->extends('Layouts.master')->section('content');
    }
}
