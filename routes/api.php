<?php

Route::get('/project', 'ProjectController@show');
Route::get('/selected-apus', 'APUController@getSelectedAPUs');
Route::get('/available-apus', 'APUController@getAvailableAPUs');
Route::delete('/apus', 'APUController@deleteAPUs');
Route::post('/excel-report', 'ReportController@generateExcelReport');
Route::post('/pdf-report', 'ReportController@generatePDFReport');
Route::get('/search-apus', 'APUController@searchAPUs');
Route::get('/apus/{id}', 'APUController@show');
Route::get('/all-apus', 'APUController@getAllAPUs');
Route::get('/user-apus', 'APUController@getUserAPUs');
Route::post('/add-apu-to-project', 'ProjectController@addAPUToProject');
Route::put('/project', 'ProjectController@update');
Route::put('/apus/{id}/technical-specs', 'APUController@updateTechnicalSpecs');