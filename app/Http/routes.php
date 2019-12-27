<?php

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salary-survey', 'PagesController@surveyIndex');

Route::get('/admin', 'AdminController@index');

Route::group(['prefix' => 'crud'], function(){
    Route::get('/data/{table}', 'CrudController@datatable')->name('crud.data');
    Route::get('/{table}', 'CrudController@index')->name('crud.index');
    Route::get('/{table}/show/{id}', 'CrudController@show')->name('crud.show');
    Route::get('/{table}/create', 'CrudController@create')->name('crud.create');
    Route::post('/{table}/store', 'CrudController@store')->name('crud.store');
    Route::get('/{table}/edit/{id}', 'CrudController@edit')->name('crud.edit');
    Route::patch('/{table}/{id}', 'CrudController@update')->name('crud.update');
    Route::delete('/{table}/destroy/{id}', 'CrudController@destroy')->name('crud.destroy');
});

// Route::get('/test-phpexcel', function () {
//     dd(new PHPExcel);
// });
