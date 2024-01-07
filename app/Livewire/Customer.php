<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\Customer as ModelCustomer;
use App\Models\State;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Customer extends Component
{
    public $states,$id,$countries,$name,$email,$customer_name,$phone_no,$company_url,$country_id,$gst_no,$state_id,$city,$address,$image,$url="",$title="Add Customer";
    
    use WithFileUploads,ImageTrait;
    protected $listeners=[
        'callState'
    ];

    protected $rules = [
        'name'=>'required|min:8',
        'customer_name'=>'required',
        'email'=>'required|unique:customers,email',
        'image'=>'required|image|max:2048',
        'company_url'=>'required',
        'gst_no'=>'required',
        'phone_no'=>'required',
        'country_id'=>'required',
        'state_id'=>'required',
        'city'=>'required',
        'address'=>'required',
    ];

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

    public function setState($value)
    {
        $this->state_id=$value;
    }

    public function callState($value)
    {
        $this->country_id=$value;
        $this->states=State::where('country_id',$value)->get();
        $this->dispatch('calljs');
    }

    public function addCustomer()
    {
        $this->validate();
        try {
            $image_path=$this->imagePath($this->image,'customer');
            
            ModelCustomer::create([
                'name'=>$this->name,
                'customer_name'=>$this->customer_name,
                'email'=>$this->email,
                'image'=>$image_path,
                'company_url'=>$this->company_url,
                'gst_no'=>$this->gst_no,
                'phone_no'=>$this->phone_no,
                'country_id'=>$this->country_id,
                'state_id'=>$this->state_id,
                'city'=>$this->city,
                'address'=>$this->address,
            ]);

            $this->dispatch('dismissmodal',message: 'Customer Added Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e,parameter:'400');
        }
    }

    public function editCustomer($id)
    {
        $customer=ModelCustomer::where('id',$id)->first();
        if($customer!=null)
        {
            $this->callState($customer->country_id);
            $this->customer_name=$customer->customer_name;
            $this->name=$customer->name;
            $this->phone_no=$customer->phone_no;
            $this->email=$customer->email;
            $this->address=$customer->address;
            $this->city=$customer->city;
            $this->country_id=$customer->country_id;
            $this->state_id=$customer->state_id;
            $this->gst_no=$customer->gst_no;
            $this->company_url=$customer->company_url;
            $this->id=$customer->id;
            $this->url=url("uploads/".$customer->image);
            $this->title="Edit Customer";
            $this->dispatch("message",parameter:"200");
        }else{
            $this->dispatch("message",message:"Customer Not Found",parameter:"400");
        }

        return true;
    }

    public function updateCustomer()
    {
        $this->validate([
            'name'=>'required|min:8',
            'customer_name'=>'required',
            'email'=>'required|unique:customers,email,'.$this->id,
            'image'=>'nullable|image|max:2048',
            'company_url'=>'required',
            'gst_no'=>'required',
            'phone_no'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city'=>'required',
            'address'=>'required',
        ]);
        try {
            if($this->image!=null)
            {
                $image_path=$this->imagePath($this->image,'customer');
            }else{
                $image_path=ModelCustomer::where('id',$this->id)->pluck('image')->first();
            }
            
            ModelCustomer::where('id',$this->id)->update([
                'name'=>$this->name,
                'customer_name'=>$this->customer_name,
                'email'=>$this->email,
                'image'=>$image_path,
                'company_url'=>$this->company_url,
                'gst_no'=>$this->gst_no,
                'phone_no'=>$this->phone_no,
                'country_id'=>$this->country_id,
                'state_id'=>$this->state_id,
                'city'=>$this->city,
                'address'=>$this->address,
            ]);

            $this->dispatch('dismissmodal',message: 'Customer Updated Successfully',parameter:'200');
        } catch (\Exception $e) {
            Log::info($e);
            $this->dispatch('dismissmodal',message: $e,parameter:'400');
        }
    }

    public function deleteCustomer($value)
    {
        if(ModelCustomer::where('id',$value)->exists())
        {
            ModelCustomer::where('id',$value)->delete();
            $this->dispatch('delete',parameter:"200");
        }else{
            $this->dispatch('delete',parameter:"400",message:"Customer Not Found");
        }
    }
}
