<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialAuthController;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/producten', [ProductController::class, 'index'])->name('products');

Route::get('/inloggen', function () {
    return view('login');
})->name('login');

Route::get('/registreren', function () {
    return view('register');
})->name('register');
Route::post('/registreren', [UserController::class, 'register'])->name('Postregister');
Route::post('/inloggen', [UserController::class, 'login'])->name('Postlogin');

route::get('auth/google', [SocialAuthController::class, 'redirectgoogle'])->name('google-auth');
route::get('auth/google/callback', [SocialAuthController::class, 'callbackgoogle']);

route::get('auth/facebook/redirect', [SocialAuthController::class, 'redirectFacebook'])->name('facebook-auth');
route::get('auth/facebook/callback', [SocialAuthController::class, 'callbackfacebook']);

Route::middleware('auth')->group(function () {
    Route::get('account/accountoverzicht', function () {
        return view('account.account');
    })->name('account');
    Route::get('account/mijn-Gegevens', function () {
        return view('account.info');
    })->name('accountinfo');

    Route::get('account/Bestellingen', function () {
        return view('account.orders');
    })->name('accountpurchases');

    Route::get('account/betaalgegevens', function () {
        return view('account.payment');
    })->name('paymentinfo');

    Route::get('account/verkopen', function () {
        return view('account.sales');
    })->name('accountsales');
    route::get('auth/logout', [SocialAuthController::class, 'logout'])->name('logout');
    Route::get('account/verkopen/maken', ([ProductController::class, 'create']))->name('createproduct');
    Route::post('account/verkopen/opslaan', ([ProductController::class, 'store']))->name('storeproduct');
});

