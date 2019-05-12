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

Route::view('/', 'portal.pages.home');
Route::view('/over-ons', 'portal.pages.about');
Route::view('/contact', 'portal.pages.contact');
Route::view('/services', 'portal.pages.services');
Route::view('/portfolio', 'portal.pages.portfolio');
//klantenlogin
Route::view('/klantenlogin', 'portal.pages.klantenlogin');
Route::view('/testimonials', 'portal.pages.testimonials');



//client area
Route::view('/client/bergwerff-vlees', 'portal.pages.client-bergwerff');



