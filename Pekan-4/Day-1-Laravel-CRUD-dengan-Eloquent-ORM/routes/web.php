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

use Illuminate\Support\Facades\Route;


// Route::get('/master', function () {
//   return view('layouts.master');
// });

Route::get('/', function () {
  return view('items.table');
});


Route::get('/data-tables', function () {
  return view('items.data-tables');
});

/* Tugas CRUD Laravel */

// Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaans.index');
// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
// Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
// Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');
// Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::resource('pertanyaan', 'PertanyaanController');
