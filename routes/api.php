<?php

use Illuminate\Http\Request;

 
Route::post('/phone', 'PessoaController@store')->name('phone.create');
Route::get('/phone/{peopleName?}', 'PessoaController@index')->name('phone.index');
Route::delete('phone/{id}', 'PessoaController@delete')->name('phone.delete');