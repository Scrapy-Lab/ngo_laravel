<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function projectDetail($slug)
    {
        return view('pages.project-details', compact('slug'));
    }
}
