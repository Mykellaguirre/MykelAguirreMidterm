<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\CalendarController;

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
    return view('welcome');
});
Route::get('manufacturer', function () {
    return view('manufacturer');
});
Route::get('view-info', function () {
    return view('view-info');
});
Route::get('tech-category', function () {
    return view('tech-category');
});
Route::get('create-invoice', function () {
    return view('create-invoice');
});
Route::get('customers', function () {
    return view('customers');
});


Route::fallback(function () {
    return view('what-ever');
});

Route::get('events-feed/' , function () {
	return ' [
    {
      "title": "CSE4500 Class",
      "start": "2022-02-23T17:30:00",
      "end": "2022-02-23T18:45:00"
    },
    {
      "title": "CSE4500 Class",
      "start": "2022-02-28T17:30:00",
      "end": "2022-02-28T18:45:00"
    },   
  ]';
});

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get(uri:'index',action:'CalendarController@index')->name(name:'allEvent');



Route::resource('/todos', TodoController::class);
Route::resource('/calendar', CalendarController::class);






