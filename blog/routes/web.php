<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});
Route::get('/siswa', 'SiswaController@index')->name('siswa.view');
Route::get('/siswa/siswatambah', 'SiswaController@create');
Route::post('/siswa/store', 'SiswaController@store')->name('siswa.store');
Route::post('/siswa/{id}', 'SiswaController@show')->name('siswa.show');
Route::get('/siswa/{id}/edit', 'SiswaController@edit')->name('editData');
Route::put('/data/{id}/update', 'SiswaController@update')->name('updateData');
Route::get('/siswa/{id}/delete', 'SiswaController@destroy')->name('delete');