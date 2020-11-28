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
    return view('welcome');
});
// Ai processing a use korle hobe
 Route::get('/student','FrontendController@View');

 Route::get('/departments/create','DepartmentController@create');
 Route::post('/departments','DepartmentController@store');
 Route::get('/departments','DepartmentController@view');
 Route::get('/departments/delete/{id}','DepartmentController@delete');
 Route::get('/departments/{id}/edit','DepartmentController@edit');
 Route::post('/departments/{id}','DepartmentController@update');
//or eta
 //Route::resource('departments','DepartmentController');

 //StudentController
 Route::get('/students/create','StudentController@create');
 Route::post('/students','StudentController@store');
 Route::get('/students','StudentController@index');
 Route::get('/students/{id}/edit','StudentController@edit');
 Route::post('/students/{id}','StudentController@update');
 Route::get('/students/destory/{id}','StudentController@destory');

 //AdmissionControler
 Route::get('admissions/create','AdmissionController@create');
 Route::post('admissions','AdmissionController@store');
 Route::get('admissions','AdmissionController@index');