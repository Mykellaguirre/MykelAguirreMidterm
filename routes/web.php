<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\EquipmentController;

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
    return view('manufacturers');
});
Route::get('note', function () {
    return view('notes');
});
Route::get('type', function () {
    return view('type');
});
Route::get('equipment', function () {
    return view('equipments');
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




Route::fallback(function () {
    return view('what-ever');
});


Route::resource('/manufacturers', ManufacturerController::class);
Route::resource('/notes', NoteController::class);
Route::resource('/types', TypeController::class);
Route::resource('/equipments', EquipmentController::class);















