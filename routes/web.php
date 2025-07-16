<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\StripeHostedController;



// Frontend 
Route::get('/', function () {
    return view('index');
});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/logo', [HomeController::class, 'logo'])->name('logo.index');
Route::get('/website', [HomeController::class,'website'])->name('website.index');
Route::get('/digitalmarketing',[HomeController::class,'digitalmarketing'])->name('digitalmarketing.index');
Route::get('/portfolio',[HomeController::class,'portfolio'])->name('portfolio.index');
Route::get('/contact',[HomeController::class,'contact'])->name('contact.index');
Route::get('/about',[HomeController::class,'about'])->name('about.index');
Route::get('/mobileapp',[HomeController::class,'mobileapp'])->name('mobileapp.index');
Route::get('/clientreview',[HomeController::class,'clientreview'])->name('clientreview.index');
Route::get('/refund',[HomeController::class,'refund'])->name('refund.index');
Route::get('privacypolicy',[HomeController::class,'privacypolicy'])->name('privacypolicy.index');
Route::get('/termandcondination',[HomeController::class,'termandcondination'])->name('termandcondination.index');
Route::get('/price',[HomeController::class,'price'])->name('price.index');

// Backend
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');


Route::get('/agreement-form', [AgreementController::class, 'showAdminForm'])->name('admin.agreementForm');
Route::post('/admin/send-agreement', [AgreementController::class, 'sendAgreement'])->name('admin.sendAgreement');
Route::get('/client/agreement/{token}', [AgreementController::class, 'showClientForm'])->name('client.agreement');
Route::post('/client/submit-agreement', [AgreementController::class, 'submitAgreement'])->name('client.submitAgreement');

Route::get('/checkout', [StripeHostedController::class, 'showForm'])->name('checkout.form');
Route::post('/start-checkout', [StripeHostedController::class, 'startCheckout'])->name('checkout.start');
Route::get('/thank-you', fn() => view('thank-you'))->name('thank.you');
Route::get('/cancelled', fn() => view('cancelled'))->name('payment.cancelled');

Route::get('/admin/generate-link', function () {
    return view('admin.generate-payment-link');
})->name('admin.generate.link.form');

Route::post('/admin/generate-link', [StripeHostedController::class, 'generateLink'])->name('admin.generate.link');