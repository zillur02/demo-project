<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ExcelController;
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

Route::get('/',[App\Http\Controllers\UserController::class, 'viewuser'])->name('viewuser');

//Import Export 
// Route for view/blade file.
Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('importExportView', 'ExcelController@importExportView')->name('importExportView');
    // Route for export/download tabledata to .csv, .xls or .xlsx
    Route::get('exportExcel/{type}', 'ExcelController@exportExcel')->name('exportExcel');
    // Route for import excel data to database.
    Route::post('importExcel', 'ExcelController@importExcel')->name('importExcel');
});

