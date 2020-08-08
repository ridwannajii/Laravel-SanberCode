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
// menampilkan list data pertanyaan-pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index');
// menampilkan form untuk membuat pertanyaan baru
Route::get('/pertanyaan/create', 'PertanyaanController@create');
// menyimpan data baru ke tabel pertanyaan
Route::post('/pertanyaan', 'PertanyaanController@store');
// menampilkan form untuk edit pertanyaan dengan id tertentu
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
// menyimpan perubahan data pertanyaan (update) untuk id tertentu
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
// menghapus pertanyaand dengan id tertentu
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');
// menampilkan detail pertanyaan dengan id tertentu
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
