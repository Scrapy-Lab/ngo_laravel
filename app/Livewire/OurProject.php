<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;
use Carbon\Carbon;
class OurProject extends Component
{
    public $allProjects =[];

    public function mount() {
        $this->allProjects = Project::orWhere('schedule',null)->orWhere('schedule','<=',Carbon::now())->where('is_visible',1)->get();
    }

    public function render()
    {
        return view('livewire.our-project');
    }
}
