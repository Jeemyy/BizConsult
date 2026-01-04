<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;


// Route::get('/', function () {
//     return view('fronts.index');
// });


// ::name -> if you need return a const think use name the result in URL: " / "
## Collect Of Name => " front. [index, about, service, contact]";
## { Front Collection }
Route::name('front.')->group(function(){
    Route::view('/', 'fronts.index')->name('index');
    Route::view('/about', 'fronts.about')->name('about');
    Route::view('/service', 'fronts.service')->name('service');
    Route::view('/contact', 'fronts.contact')->name('contact');
});



## { Admin Collection }
// in blade file ==> {{ admin.index }}
// URL ==> " admin/ "
Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')
->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
->group(function(){ // localhost/{ $lang }/admin/
    Route::middleware('auth')->group(function() {
        Route::view('/', "admin.index")->name("index");
        Route::controller(ServiceController::class)->group(function(){
            Route::resource('services',ServiceController::class);
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
