<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\JoinNow as Joinus;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class JoinNow extends Component
{
    use WithFileUploads;

    public $projects = [];
    public $join_now;
    #[Validate('required|min:3')]
    public $full_name;
    #[Validate('required|min:3')]
    public $mobile_no;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:3')]
    public $address;
    #[Validate('required|min:3')]
    public $city;
    #[Validate('required|min:3')]
    public $state;
    #[Validate('required|min:3')]
    public $dob;
    #[Validate('required')]
    public $age;

    public $blood_group;
    #[Validate('required')]
    public $qualification;
    #[Validate('required')]
    public $volunter_type;
    #[Validate('required')]
    public $project_id = [];
    public $aadhar_front;
    public $aadhar_back;
    public $pan;

    public function mount()
    {
        $this->projects = Project::select('id','title')->get();
        $this->join_now = new Joinus;
    }

    public function render()
    {
        return view('livewire.join-now');
    }

    public function joinNow()
    {
        $this->validate();
// dd($this->aadhar_back->extension());

        $aadharFront = 'aadharFront_'.time().'.'.$this->aadhar_front->extension();
        $aadharBack = 'aadharBack_'.time().'.'.$this->aadhar_back->extension();
        $imagePan = 'imagePan_'.time().'.'.$this->pan->extension();
        $this->join_now->full_name = $this->full_name;
        $this->join_now->mobile_no = $this->mobile_no;
        $this->join_now->email = $this->email;
        $this->join_now->address = $this->address;
        $this->join_now->city = $this->city;
        $this->join_now->state = $this->state;
        $this->join_now->dob = $this->dob;
        $this->join_now->age = $this->age;
        $this->join_now->blood_group = $this->blood_group;
        $this->join_now->qualification = $this->qualification;
        $this->join_now->volunter_type = $this->volunter_type;
        $this->join_now->project_id = json_encode($this->project_id);
        $this->join_now->aadhar_front = $aadharFront;
        $this->join_now->aadhar_back = $aadharBack;
        $this->join_now->pan = $imagePan;

        // Store Images in folders
        $this->aadhar_front->storeAs('joinNowImages', $aadharFront, 'public');
        $this->aadhar_back->storeAs('joinNowImages', $aadharBack, 'public');
        $this->aadhar_front->storeAs('joinNowImages', $imagePan, 'public');
        if($this->join_now->save()){
            session()->flash('status', 'Your Details successfully submitted.');
        }
    }
}
