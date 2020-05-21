<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('tempcheck.create');
});

Route::resource('TempCheck','TempCheck\TempCheckController');

Route::resource('Report','Report\ReportController');

Route::resource('DeclarationForm','Form\FormController');

Route::resource('Employee','Form\EmployeeController');

Route::resource('Visitor','Form\VisitorController');

Route::resource('List','Form\ListController');

Route::resource('EmployeeQuestList','Quest\EmployeeQuestController');

Route::resource('VisitoreQuestList','Quest\VisitorQuestController');

