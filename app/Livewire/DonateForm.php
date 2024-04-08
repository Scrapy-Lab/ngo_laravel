<?php

namespace App\Livewire;

use App\Mail\UnderProcess;
use Livewire\Component;
use App\Models\Project;
use Carbon\Carbon;
use App\Models\DonateNow;
use App\Models\Payment;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Mail;

class DonateForm extends Component
{
    use WithFileUploads;
    public $donateFirstForm = true;
    public $donateSecondForm = false;
    public $donateThirdForm = false;
    public $donateFourthForm = false;
    // public $disable = 'disabled'; //commented by client
    public $disable = '';
    public $donateNow;
    public $payment;
    public $projects;

    // Donation Type
    public $donation_type = 0;
    public $payment_type;
    public $transaction_type = [];
    public $amount;
    public $enableCustomAmt;

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
        $this->donation_type = 0;
        $this->payment_type = 1;
        $this->projects = Project::orWhere('schedule', null)->orWhere('schedule', '<=', Carbon::now())->where('is_visible', 1)->get();
        $this->donateNow = new DonateNow();
        $this->payment = new Payment();
    }

    public function render()
    {

        return view('livewire.donate-form');
    }

    public function enableCustomAmt()
    {
        $this->disable = '';
        $this->enableCustomAmt = true;
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

        foreach ($this->transaction_type as $key => $val) {
            if ($val) {

                $transactionIds[] = $key;
            }
        }
        // dd($this->transaction_type, $transactionIds);
        $this->donateNow->transaction_type = json_encode($transactionIds);
        if ($this->donateNow->save()) {
            $this->donateFirstForm = false;
            $this->donateSecondForm = true;
            session()->flash('status', 'Donation Details Complete.');
        }
    }

    public function savePersonalInfo($back)
    {

        if ($back) {
            // dd($back);
            $this->donateFirstForm = true;
            $this->donateSecondForm = false;
            return true;
        }

        // dd('asdasd');
        $this->validate();
        // dd($this->validate());
        $this->donateNow->full_name = $this->full_name;
        $this->donateNow->email = $this->email;
        $this->donateNow->phone = $this->phone;
        $this->donateNow->city = $this->city;
        $this->donateNow->address = $this->address;
        if ($this->donateNow->save()) {
            $this->donateSecondForm = false;
            $this->donateThirdForm = true;
            session()->flash('status', 'User Personal Details successfully submitted.');
        }
    }


    public function saveScreenShot($back)
    {

        if ($back) {
            // dd($back);
            $this->donateSecondForm = true;
            $this->donateThirdForm = false;
            return true;
        }

        $this->validate();


        // dd();
        // $this->screenshot->store('screenshot');
        // dd( $this->screenshot->store('screenshot'));
        $this->donateNow->payment_ss = $this->screenshot->store('payments', 'public');
        if ($this->donateNow->save()) {
            $this->donateThirdForm = false;
            $this->donateFourthForm = true;

            // dd($this->donateNow->id);
            $this->payment->donation_id = $this->donateNow->id;
            $this->payment->save();
            session()->flash('status', 'Payment Details successfully submitted.');
            $projects="";
            $ids = json_decode( $this->donateNow->transaction_type);
            $data = Project::select('title')->whereIn('id', $ids)->get();
            foreach ($data as $key => $val) {
                $projects .= $val->title;
                if ($key < count($data) - 1) {
                    $projects .= ', ';
                }
            }
            // dd($this->donateNow->created_at);
            $createdAt = Carbon::createFromFormat('Y-m-d H:i:s', $this->donateNow->created_at);
            $formattedCreatedAt = $createdAt->format('Y-m-d'); // Change the format as per your requirement

            $data_array = [
                'full_name' => $this->donateNow->full_name,
                'email' => $this->donateNow->email,
                'transaction_type' => $projects,
                'city' => $this->donateNow->city,
                'address' => $this->donateNow->address,
                'amount' => $this->donateNow->amount,
                'createdAt' => $formattedCreatedAt,
            ];


            Mail::to('rajbansh.snehal@gmail.com')->send(new UnderProcess($data_array));
        }
    }
}
