<?php

namespace App\Http\Controllers;

use App\Models\DonateNow;
use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DynamicPageController extends Controller
{
    public function index()
    {

        $projects = Project::orWhere('schedule', null)->orWhere('schedule', '<=', Carbon::now())->where('is_visible', true)->orderBy('priority', 'ASC')->limit(4)->get();


        // dd($projects);
        return view('index', compact('projects'));
    }


    public function projectDetail($slug)
    {
        return view('pages.project-details', compact('slug'));
    }


    public function reciept()
    {



        // dd(Crypt::decryptString(session('donation_id')));

        $donation_id = Crypt::decryptString(session('donation_id'));
        if ($donation_id) {

            $dotantion_data = DonateNow::find($donation_id);
                if($dotantion_data->full_name){

                    $pdf = Pdf::loadView('pages.reciept',['data' => $dotantion_data]);
                    // dd($pdf->download());
                    return $pdf->download();


                }

            // dd($dotantion_data);
        }

        // return view('pages.reciept');


    }
}
