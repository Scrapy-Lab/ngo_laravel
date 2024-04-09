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
        $this->Projects = Post::where('post_type', 'post')
        ->where(function ($query) {
            $query->whereNull('published_at')
                ->orWhere('published_at', '<=', Carbon::now());
        })
        ->orderBy('published_at', 'DESC')
        ->get();
    }

    public function render()
    {
        return view('livewire.blog-list');
    }
}
