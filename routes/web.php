<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\UserController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/producten', [ProductController::class, 'index'])->name('products');
Route::get('/producten/{product}', [ProductController::class, 'show'])->name('product.show');


Route::get('/inloggen', function () {
    return view('login');
})->name('login');

Route::get('/registreren', function () {
    return view('register');
})->name('register');
Route::post('/registreren', [UserController::class, 'register'])->name('Postregister');
Route::post('/inloggen', [UserController::class, 'login'])->name('Postlogin');
route::get('profiel/{user}', [UserController::class, 'show'])->name('profile');

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

    Route::get('account/bestellingen', [OrderController::class, 'index'])->name('orders');

    Route::get('account/betaalgegevens', function () {
        return view('account.payment');
    })->name('paymentinfo');

    
    Route::get('/account/verkopen', [ProductController::class, 'getUserProducts'])->name('accountsales');
    Route::get('/auth/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/winkelwagen', [CartController::class, 'index'])->name('cart.index');
    Route::post('/winkelwagen/toevoegen/{product}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/winkelwagen/verwijderen/{cart}', [CartController::class, 'remove'])->name('cart.remove');
    
    Route::get('/bestellen', [OrderController::class, 'store'])->name('order.store');

    Route::middleware('completed.account')->group(function () {
        Route::get('account/verkopen/maken', [ProductController::class, 'create'])->name('createproduct');
        Route::post('account/verkopen/opslaan', [ProductController::class, 'store'])->name('storeproduct');
        Route::get('account/verkopen/{product}/bewerken', [ProductController::class, 'edit'])->name('editproduct');
        Route::put('account/verkopen/{product}/opslaan', [ProductController::class, 'update'])->name('updateproduct');
        Route::delete('account/verkopen/{product}/verwijderen', [ProductController::class, 'destroy'])->name('deleteproduct');
    });

    Route::middleware('orderItem.belongsToUser')->group(function () {
        Route::get('review/create/{orderitem}/{product}', [ReviewController::class, 'create'])->name('review.create');
    });
    Route::post('review/create/opslaan', [ReviewController::class, 'store'])->name('review.store');
});

