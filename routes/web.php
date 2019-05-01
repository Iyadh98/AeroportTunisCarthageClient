<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/flights','ScrapperController@scrap');
Route::get('/flightDetails', function () {
    return view('flight-detail');
});
Route::get('/hotels', 'HotelController@index');
Route::get('/hotelDetails', function () {
    return view('hotel-detail');
});
Route::get('/taxis', function () {
    return view('car-listing');
});
Route::get('/taxiDetails', function () {
    return view('car-detail');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/profil', function () {
    return view('user-profile');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/auth', 'FirebaseAuthController@loginFirebase');

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/fetch', 'ScrapperController@autocomplete')->name('autocomplete.fetch');
Route::post('/fetch1', 'ScrapperController@autocompleteTo')->name('autocompleteTo.fetch');
Route::post('/search','ScrapperController@searchFlights');
Route::post('/searchView','ScrapperController@searchFlights');

Route::get('/bagage', function () {
    return view('createBagage');
});
Route::get('/qrcode','BagageController@getPost');
Route::get('/boutiques','BoutiqueController@index');
