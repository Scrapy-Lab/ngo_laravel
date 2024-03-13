<?php

namespace App\Livewire;

use App\Models\Project;
use Carbon\Carbon;
use LaraZeus\Sky\Models\Post;
use Livewire\Component;

class BlogList extends Component
{
    public $Projects =[];

    public function mount() {
        $this->Projects = Post::orWhere('published_at',null)->orWhere('published_at','<=',Carbon::now())->orderBy('ordering', 'ASC')->limit(3)->get();
    }

    public function render()
    {
        return view('livewire.blog-list');
    }
}
