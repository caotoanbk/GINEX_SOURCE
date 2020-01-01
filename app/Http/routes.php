<?php

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salary-survey', 'PagesController@surveyIndex');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/salary/data', 'AdminController@salary_data');
    Route::get('/salary', 'AdminController@salary_index');
    Route::get('/welfare', 'AdminController@welfare_index');
    Route::post('/welfare', 'AdminController@welfare_store');
    Route::post('/welfare-excel', 'AdminController@welfare_excel_store');
    Route::post('/salary-excel', 'AdminController@salary_excel_store');
    Route::get('/create-welfare', 'AdminController@welfare_create');
});

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

Route::get('/ssurvey/welfare/data', 'SsurveyController@welfare_data');

Route::group(['prefix' => 'ssurvey'], function(){
    Route::get('/', 'SsurveyController@index')->name('ssurvey.index');
    Route::get('/salary/data', 'SsurveyController@salary_data');
    Route::get('/salary', 'SsurveyController@salary_index');
    Route::get('/welfare', 'SsurveyController@welfare_index');
    Route::post('/welfare', 'SsurveyController@welfare_store');
    Route::post('/welfare-excel', 'SsurveyController@welfare_excel_store');
    Route::post('/salary-excel', 'SsurveyController@salary_excel_store');
    Route::get('/create-welfare', 'SsurveyController@welfare_create');
});

// Route::get('/test-phpexcel', function () {
//     dd(new PHPExcel);
// });
