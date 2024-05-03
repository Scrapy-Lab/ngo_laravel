<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicPageController;
use App\Models\DonateNow;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Crypt;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('page-cache')->get('/',[DynamicPageController::class,'index'])->name('home');

Route::middleware('page-cache')->get('ourwork', function () {
    return view('pages.ourwork');
})->name('our-projects');

Route::get('donate', function () {
    return view('pages.donate');
})->name('donate-now');

Route::get('join-now', function () {
    return view('pages.join-now');
})->name('join-now');

Route::middleware('page-cache')->get('about-us', function () {
    return view('pages.aboutus');
})->name('about-us');

Route::middleware('page-cache')->get('contact-us', function () {
    return view('pages.contactus');
})->name('contact-us');

Route::middleware('page-cache')->get('privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy-policy');

Route::middleware('page-cache')->get('refund-policy', function () {
    return view('pages.refund');
})->name('refund-policy');

Route::middleware('page-cache')->get('terms-conditions', function () {
    return view('pages.terms');
})->name('terms-conditions');

Route::middleware('page-cache')->get('thank-you', function () {
    return view('pages.thankyou');
})->name('thank-you');


Route::get('reciept', [DynamicPageController::class,'reciept'])->name('pdf');
Route::get('recieptPDF/{id}', [DynamicPageController::class,'recieptPdf'])->name('pdf-download');


Route::get('project-details/{slug}',[DynamicPageController::class,'projectDetail'])->name('project-details');
