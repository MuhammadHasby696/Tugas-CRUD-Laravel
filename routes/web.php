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

Route::get('/master', function () {
    return view('adminlte.master');
});

// Menampilkan tabel berisi data pertanyaan-pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index');
// Menampilkan form untuk membuat pertanyaan baru
Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Menyimpan data baru ke tabel pertanyaan
Route::post('/pertanyaan', 'PertanyaanController@store');

// Menampilan jawaban dari pertanyaan dengan id tertentu
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
// Menyimpan jawaban baru untuk pertanyaan dengan id tertentu
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');


Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');
