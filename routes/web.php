<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialAuthController;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/producten', [ProductController::class, 'index'])->name('products');
Route::get('/producten/{product}', [ProductController::class, 'show'])->name('productpage');


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

    Route::get('account/mijn-Gegevens', function () {
        return view('account.info');
    })->name('accountinfo');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/delete', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('account/accountoverzicht', function () {
        return view('account.accountoverview');
    })->name('account');
    Route::get('account/Bestellingen', function () {
        return view('account.orders');
    })->name('accountpurchases');

    Route::get('account/betaalgegevens', function () {
        return view('account.payment');
    })->name('paymentinfo');

    Route::get('account/verkopen', [ProductController::class, 'getUserProducts'])->name('accountsales'); // Get all products of the authenticated user

    route::get('auth/logout', [UserController::class, 'logout'])->name('logout');


    Route::middleware(['auth', 'completed.account'])->group(function () {
        Route::get('account/verkopen/maken', [ProductController::class, 'create'])->name('createproduct');
        Route::post('account/verkopen/opslaan', [ProductController::class, 'store'])->name('storeproduct');
        Route::get('account/verkopen/{product}/bewerken', [ProductController::class, 'edit'])->name('editproduct');
        Route::put('account/verkopen/{product}/opslaan', [ProductController::class, 'update'])->name('updateproduct');
        Route::delete('account/verkopen/{product}/verwijderen', [ProductController::class, 'destroy'])->name('deleteproduct');
    });

    Route::get('/winkelwagen', function () {
        return view('shoppingcart');
    })->name('shoppingcart');

    Route::get('/cart', [CartController::class, 'index'])->name('shoppingcart');
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
});

