<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Project as ModelsProject;
use Carbon\Carbon;
use Livewire\Component;

class Project extends Component
{
    public $customer_id,$name,$start_date,$end_date,$estimation_cost,$project_manager,$title="Add Project";

    protected $rules = [
        'customer_id'=>'required',
        'name'=>'required|min:5',
        'start_date'=>'required',
        'end_date'=>'nullable',
        'estimation_cost'=>'required',
        'project_manager'=>'required',
    ];
    
    public function addProject()
    {
        $this->validate();
        ModelsProject::create([
            'name'=>$this->name,
            'customer_id'=>$this->customer_id,
            'start_date'=>Carbon::parse($this->start_date)->format('Y-m-d'),
            'end_date'=>Carbon::parse($this->end_date)->format('Y-m-d'),
            'estimation_cost'=>$this->estimation_cost,
            'project_manager'=>$this->project_manager,
        ]);

        $this->dispatch('dismissmodal',message: 'Project Added Successfully',parameter:'200');
    }

    public function setCustomer($value)
    {
        $this->customer_id=$value;
    }

    public function setStartDate($value)
    {
        $this->start_date=$value;
    }

    public function setEndDate($value)
    {
        $this->end_date=$value;
    }

    public function render()
    {
        $projects=ModelsProject::paginate(15);
        $customers=Customer::all();
        return view('livewire.project',compact('projects','customers'))->extends('Layouts.master')->section('content');
    }

    public function calljs()
    {
        $this->dispatch('calljs');
        return true;
    }
}
