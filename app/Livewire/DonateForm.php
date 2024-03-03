<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use Carbon\Carbon;

class DonateForm extends Component
{
    public $donateFirstForm = true;
    public $donateSecondForm = false;
    public $donateThirdForm = false;
    public $donateFourthForm = false;
    public $donation_type;
    public $projects;
    public $transaction_type;
    public $amount;

    public function mount()
    {
        $this->donation_type = 1;
        $this->projects = Project::orWhere('schedule',null)->orWhere('schedule','<=',Carbon::now())->where('is_visible',1)->get();
    }

    public function render()
    {
        return view('livewire.donate-form');
    }
    
    public function enableCustomAmt()
    {
        dd('tesdfs');
    }

    public function saveDonateForm()
    {
        dd('sdfsd');
    }
}
