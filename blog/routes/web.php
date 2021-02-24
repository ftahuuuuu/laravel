<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postLogin');
Route::get('/logout', 'AuthController@Logout')->name('logout');

Route::group(['middleware'=> 'auth'], function{}(){
    Route::get('/siswa', 'SiswaController@index')->name('siswa.view');
    Route::get('/siswa/siswatambah', 'SiswaController@create');
    Route::post('/siswa/store', 'SiswaController@store')->name('siswa.store');
    Route::post('/siswa/{id}', 'SiswaController@show')->name('siswa.show');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit')->name('editData');
    Route::put('/data/{id}/update', 'SiswaController@update')->name('updateData');
    Route::get('/siswa/{id}/delete', 'SiswaController@destroy')->name('delete');    
});

