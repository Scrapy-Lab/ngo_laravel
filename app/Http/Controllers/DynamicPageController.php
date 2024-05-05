<?php

namespace App\Http\Controllers;

use App\Mail\ThankYou;
use App\Models\DonateNow;
use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class DynamicPageController extends Controller
{
    public function index()
    {
        // if (session()->has('donation_id')) {
        //     session()->forget('donation_id');
        //     session()->flush();
        // }
        // dd(session()->all());
        // dd(session('donation_id'),'donation_id');
        $projects = Project::orWhere('schedule', null)->orWhere('schedule', '<=', Carbon::now())->where('is_visible', true)->orderBy('priority', 'ASC')->limit(4)->get();


        // dd($projects);
        return view('index', compact('projects'));
    }


    public function projectDetail($slug)
    {
        return view('pages.project-details', compact('slug'));
    }


    public function thankyou()
    {

        // dd(session('donation_id'));
        if (session('donation_id')) {
            $donation_id = Crypt::decryptString(session('donation_id'));
            if ($donation_id) {

                $dotantion_data = DonateNow::find($donation_id);


                if ($dotantion_data->payment_status) {

                    dd(session('donation_id'), 'asdasd');
                    return redirect(route('home'));
                } else {

                    $dotantion_data->payment_status = true;

                    $dotantion_data->save();
                    $dotantion_data->hashId = session('donation_id');

                    if ($dotantion_data->full_name) {

                        Mail::to($dotantion_data->email)->bcc('rajbansh.snehal@gmail.com', 'Snehal Raj')->send(new ThankYou($dotantion_data));
                        // Destroy the 'donation_id' session variable
                        Session::forget('donation_id');
                        session()->forget('donation_id');
                        // session()->flush();
                        // dd(session('donation_id'),'donation_id');
                        return view('pages.thankyou');
                    }
                }

                // dd($dotantion_data);
            }
        } else {

            return redirect(route('home'));
        }
    }

    public function reciept()
    {


        if (session('donation_id_reciept')) {
            $donation_id = Crypt::decryptString(session('donation_id_reciept'));
            if ($donation_id) {

                $dotantion_data = DonateNow::find($donation_id);
                // array_push($donation_data, $donation_id);
                $dotantion_data->hashId = session('donation_id');
                // dd($dotantion_data );

                if ($dotantion_data->full_name) {

                    $pdf = Pdf::loadView('pages.reciept', ['data' => $dotantion_data]);

                    // Mail::to($dotantion_data->email)->bcc('rajbansh.snehal@gmail.com', 'Snehal Raj')->send(new ThankYou($dotantion_data));
                    // dd($pdf->download());
                    return $pdf->download();
                }

                // dd($dotantion_data);
            }
        } else {

            return redirect(route('home'));
        }


        // return view('pages.reciept');


    }
    public function recieptPdf($id)
    {
        // dd(Crypt::decryptString(session('donation_id')));

        $donation_id = Crypt::decryptString($id);
        if ($donation_id) {

            $dotantion_data = DonateNow::find($donation_id);
            if ($dotantion_data->full_name) {

                $pdf = Pdf::loadView('pages.reciept', ['data' => $dotantion_data]);

                // Mail::to($dotantion_data->email)->bcc('rajbansh.snehal@gmail.com', 'Snehal Raj')->send(new ThankYou($dotantion_data));
                // dd($pdf->download());
                return $pdf->download();
            }

            // dd($dotantion_data);
        }

        // return view('pages.reciept');


    }
}
