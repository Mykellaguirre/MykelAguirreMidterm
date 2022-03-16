<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;
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

Route::resource('/customers', CustomersController::class);


Route::fallback(function () {
    return view('what-ever');
});










