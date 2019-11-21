<?php

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
    return view('login');
});
//
//Route::get('/students',function(){
//   return view('students');
//});

Route::get('/students','StudentsController@show');
Route::get('/deleteStudent/{id}','StudentsController@deleteStudent');
Route::post('/addStudent','StudentsController@addStudent');
Route::post('/editStudent/{id}','StudentsController@editStudent');
Route::get('/getStudentData/{id}','StudentsController@getStudentData');