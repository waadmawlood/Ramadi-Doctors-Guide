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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Post
Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts/{post}', 'PostsController@show')->name('posts.show');
Route::post('/posts/{post}/comment', 'PostsController@comment')->name('posts.comment');

// clinics
Route::get('/clinics', 'ClinicsController@index')->name('clinics');
Route::get('/clinics/{clinic}', 'ClinicsController@show')->name('clinics.show');
Route::post('/clinics/{clinic}/rating/me', 'ClinicsController@ratingClinic')->name('clinics.rating.me');
Route::post('/clinics/{clinic}/booking/send', 'ClinicsController@bookingClinic')->name('clinics.booking.send');
Route::get('/booking/clinics', 'ClinicsController@indexBookingClinic')->name('clinics.booking.index')->middleware('auth');


