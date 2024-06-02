<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/login',function() {
    return view('registration');
})->name('registration');

Route::get('/registration',function() {
    return view('home');
})->name('home');

Route::get('/header',function() {
    return view('cart');
})->name('cart');

Route::get('/cart',function() {
    return view('checkout');
})->name('checkout');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');



Route::post('/checkout', function () {
    return redirect()->route('checkout')->with('success_message', 'Pesanan berhasil dikirim. Terima kasih!');
})->name('checkout.store');

Route::get('/header', function () {
    return view('form');
})->name('form');



Route::post('/form', function () {
    return redirect()->route('form')->with('success_message', 'Barang akan segera diproses. Terima kasih!');
})->name('product.store');

Route::get('/form', function () {
    return view('formhistory');
})->name('formhistory');


Route::get('/product-1', function () {
    return view('product-1');
})->name('product-1');


Route::get('/product-2', function () {
    return view('product-2');
})->name('product-2');


Route::get('/home', function () {
    return view('catalogue');
})->name('catalogue');



Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');

