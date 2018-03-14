<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('guru','GuruController');
Route::resource('siswa','SiswaController');
Route::resource('wali','WaliController');