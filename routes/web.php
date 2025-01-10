<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/faq', function () {
    return view('pages.faq');
});

Route::get('/privacy_policy', function () {
    return view('pages.policy_pages.privacy_policy');
});

Route::get('/terms_conditions', function () {
    return view('pages.policy_pages.terms_conditions');
});

Route::get('/refund_policy', function () {
    return view('pages.policy_pages.refund_policy');
});

Route::get('/cookie_policy', function () {
    return view('pages.policy_pages.cookie_policy');
});

Route::get('/disclaimer', function () {
    return view('pages.policy_pages.disclaimer');
});