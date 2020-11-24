<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});




Route::get('/about', 'App\Http\Controllers\AboutController@Hello');

///pages contact ... for Route engine
Route::get('/contact', function()
{
  return View('pages.contact');
});


// service with encryption md5  for rout engine
Route::get(md5('service'),'App\Http\Controllers\ServiceController@service')->name('serviceii');
