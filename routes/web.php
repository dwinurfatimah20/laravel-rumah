<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;

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
    return view('welcome');
 });

 Route::view('/template', 'template.master');
 Route::view('/test', 'test');

// Route Untuk mengelola GenreController
Route::controller(SppController::class)->group(function () {
    Route::get('/spp', 'index')->name('spp.index');
    Route::get('/spp/create', 'create')->name('spp.create');
    Route::post('/spp', 'store')->name('spp.store');
    Route::get('/spp/{spp}', 'show')->name('spp.show');
    Route::get('/spp/{id}/edit', 'edit')->name('spp.edit');
    Route::put('/spp/{id}/update', 'update')->name('spp.update');
    Route::delete('/spp/{id}', 'destroy')->name('spp.destroy');
});
 
Route::view('/template', 'template.master');
Route::view('/test', 'test');
Route::view('/tos', 'tos');

// diatas sama dengan kodingan dibawah ini.!
// Route::get('/template', fuction(){
//  return view('template.master');
//});

Route::get('/hello', function(){
    return "Hellowww..!!";
})->name('hello');

Route::post('/hai', function(){
    return 'Haaaiii';
});

Route::resource('/kelas', KelasController::class);