<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\Customer as ModelCustomer;
use App\Models\State;
use Livewire\Component;

class Customer extends Component
{
    public $states,$countries,$name,$email,$customer_name,$phone_no,$company_url,$country_id,$image,$gst_no,$state_id,$city,$address,$title="Add Customer";
    
    protected $listeners=[
        'callState'
    ];

    protected $rules = [
        'name'=>'required|min:8',
        'email'=>'required|email',
        'image'=>'required',
        'company_url'=>'required',
        'gst_no'=>'required',
        'phone_no'=>'required',
        'country_id'=>'required',
        'state_id'=>'required',
        'city'=>'required',
        'address'=>'required',
    ];

    // protected $message =[
    //     'name'=>'Enter the Name',
    //     'email.email'=>'Enter the Valid Email Address',
    //     'company_url'=>'Enter the Website',
    //     'gst_no'=>'Enter the GST No',
    //     'phone_no'=>'Enter the Phone No',
    //     'country_id'=>'Enter the Country',
    //     'state_id'=>'Enter the State',
    //     'city'=>'Enter the City'
    // ];

    // public function updated($value)
    // {
    //     dd(1);
    //     $this->validateOnly($value);
    // }

    public function render()
    {
        $customers=ModelCustomer::paginate(15);
        return view('livewire.customer',compact('customers'))->extends('Layouts.master')->section('content');
    }

    public function mount()
    {
        $this->countries=Country::all();
        return true;
    }

    public function calljs()
    {
        $this->dispatch('calljs');
        return true;
    }

    public function callState($value)
    {
        $this->states=State::where('country_id',$value)->get();
        $this->dispatch('calljs');
    }

    public function addCustomer()
    {
        $validate=$this->validate();
        dd($validate);
    }
}
