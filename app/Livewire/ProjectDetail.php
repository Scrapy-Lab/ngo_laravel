<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;

class ProjectDetail extends Component
{
    public $projectDetails;

    Public function mount($slug) {
        $this->projectDetails = Project::where('slug',$slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.project-detail');
    }
}
