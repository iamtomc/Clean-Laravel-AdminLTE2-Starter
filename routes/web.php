<?php

Route::get('/', function () { return view('welcome'); });
Route::get('starter', function () { return view('starter'); })->name('starter');
Route::get('index', function () { return view('index'); })->name('index');
Route::get('index2', function () { return view('index2'); })->name('index2');


// Forms
Route::get('forms/general', function () { return view('pages/forms/general'); })->name('forms.general');
Route::get('forms/advanced', function () { return view('pages/forms/advanced'); })->name('forms.advanced');
Route::get('forms/editors', function () { return view('pages/forms/editors'); })->name('forms.editors');

// Tables
Route::get('tables/simple', function () { return view('pages/tables/simple'); })->name('tables.simple');
Route::get('tables/data', function () { return view('pages/tables/data'); })->name('tables.data');