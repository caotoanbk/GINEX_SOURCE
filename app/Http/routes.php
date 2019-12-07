<?php

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salary-survey', 'PagesController@surveyIndex');

// Route::get('/test-phpexcel', function () {
//     dd(new PHPExcel);
// });
