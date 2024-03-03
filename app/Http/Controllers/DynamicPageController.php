<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function index()
    {

        $projects = Project::orWhere('schedule',null)->orWhere('schedule','<=',Carbon::now())->where('is_visible', true)->orderBy('priority', 'ASC')->get();


        // dd($projects);
        return view('index', compact('projects'));
    }


    public function projectDetail($slug)
    {
        return view('pages.project-details', compact('slug'));
    }
}
