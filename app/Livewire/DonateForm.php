<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use Carbon\Carbon;
use App\Models\DonateNow;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class DonateForm extends Component
{
    use WithFileUploads;
    public $donateFirstForm = true;
    public $donateSecondForm = false;
    public $donateThirdForm = false;
    public $donateFourthForm = false;
    public $disable = 'disabled';
    public $donateNow;
    public $projects;

    // Donation Type
    public $donation_type;
    public $payment_type;
    public $transaction_type = [];
    public $amount;

    // Personal Information
    #[Validate('required|min:3')]
    public $full_name;
    #[Validate('required|email')]
    public $email;
    #[Validate('required|min:3')]
    public $phone;
    #[Validate('required|min:3')]
    public $city;
    #[Validate('required|min:3')]
    public $address;
    // #[Validate('required|image|max:1024')]
    public $screenshot;

    public function mount()
    {
        $this->donation_type = 1;
        $this->payment_type = 1;
        $this->projects = Project::orWhere('schedule',null)->orWhere('schedule','<=',Carbon::now())->where('is_visible',1)->get();
        $this->donateNow = new DonateNow();
    }

    public function render()
    {
        return view('livewire.donate-form');
    }

    public function enableCustomAmt()
    {
        $this->disable = '';
    }

    public function fixedAmount($amount)
    {
        $this->amount = $amount;
    }

    public function saveDonateForm()
    {
        $this->donateNow->donation_type = $this->donation_type;
        $this->donateNow->amount = $this->amount;
        $this->donateNow->payment_type = $this->payment_type;
        $transactionIds = [];
        foreach($this->transaction_type as $key=>$val){
            $transactionIds[] = $key;
        }
        $this->donateNow->transaction_type = json_encode($transactionIds);
        if($this->donateNow->save()){
            $this->donateFirstForm = false;
            $this->donateSecondForm = true;
            session()->flash('status', 'Donation Details Complete.');
        }


    }

    public function savePersonalInfo()
    {
        // dd('asdasd');
        $this->validate();
        // dd($this->validate());
        $this->donateNow->full_name = $this->full_name;
        $this->donateNow->email = $this->email;
        $this->donateNow->phone = $this->phone;
        $this->donateNow->city = $this->city;
        $this->donateNow->address = $this->address;
        if($this->donateNow->save()){
            $this->donateSecondForm = false;
            $this->donateThirdForm = true;
            session()->flash('status', 'User Personal Details successfully submitted.');
        }
    }


    public function saveScreenShot()
    {
        $this->validate();
        $this->donateNow->payment_ss = $this->screenshot;
        if($this->donateNow->save()){
            $this->donateThirdForm = false;
            $this->donateFourthForm = true;
            session()->flash('status', 'Payment Details successfully submitted.');
        }
    }
}
