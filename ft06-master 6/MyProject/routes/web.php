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

Route::get('/', 'ToDoController@GetToDo');
Route::post('/addtodo', 'ToDoController@AddToDo');
Route::post('/deletetodo/{id}', 'ToDoController@DeleteToDo');


// Route::get('/app', function(){
//     return view('app');
// });

// Route::get('/child', function(){
//     return view('child');
// });

// Route::get('/', function () {
//     return view('calculator.calculator', ['name' => 'James'] );
// });

// Route::get('/mydata/{id?}/name/{name?}', function($id = "", $name = ""){
//     return $id . " " . $name;
// });

// Route::get('fromController', 'MyController@GetData');

// Route::get('fromController2/{id?}', 'MyController@GetData2');




