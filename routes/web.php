<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SettingController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


// Route::get('/', function () {
//     return view('fronts.index');
// });


// ::name -> if you need return a const think use name the result in URL: " / "
## Collect Of Name => " front. [index, about, service, contact]";
## { Front Collection }
Route::name('front.')->controller(FrontController::class)->group(function(){
    ## =================================> Index
    Route::get('/', 'index')->name('index');
    Route::post('/subscriber/mail', 'subscriberMail')->name('subscriber.mail');
    ## =================================> About
    Route::get('/about', 'about')->name('about');

    ## =================================> Services
    Route::get('/service', 'service')->name('service');

    ## =================================> Contact
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/store/message', 'storeMessage')->name('message.store');
});



## { Admin Collection }
// in blade file ==> {{ admin.index }}
// URL ==> " admin/ "
Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')
->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
->group(function(){ // localhost/{ $lang }/admin/
    Route::middleware('auth')->group(function() {
        Route::view('/', "admin.index")->name("index");

        ## ================================> Abouts
        Route::controller(AboutController::class)->group(function(){
            Route::resource('abouts', AboutController::class);
        });
        ## ================================> Services
        Route::controller(ServiceController::class)->group(function(){
            Route::resource('services',ServiceController::class);
        });
        ## ================================> Features
        Route::controller(FeatureController::class)->group(function(){
            Route::resource('features', FeatureController::class);
        });
        ## ================================> Messages
        Route::controller(MessageController::class)->group(function(){
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        });
        ## ================================> Subscribers
        Route::controller(SubscriberController::class)->group(function(){
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });
        ## ================================> Testimonial
        Route::controller(TestimonialController::class)->group(function(){
            Route::resource('testimonials', TestimonialController::class);
        });
        ## ================================> Testimonials
        Route::controller(SettingController::class)->group(function(){
            Route::resource('settings', SettingController::class)->only(['index', 'update']);
        });
        ## ================================> Companies
        Route::controller(CompanyController::class)->group(function(){
            Route::resource('companies', CompanyController::class);
        });
        ## ================================> Companies
        Route::controller(MemberController::class)->group(function(){
            Route::resource('members', MemberController::class);
        });
        // Route::resource('services', ServiceController::class);
    });
    // Route::view('/login', "admin.auth.login")->name("login");
    require __DIR__ .'/auth.php';
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileControll<<er::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
