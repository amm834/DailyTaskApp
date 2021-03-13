<?php

use Illuminate\Support\Facades\Route;

/*
Upgrade to PHP8 and Laravel8
 Redirect route
 Learn More about Blade Templating Engine of Laravel
 */

Route::redirect('/', 'tasks');

Route::get('/tasks', 'Taskcontroller@index');
/*
 You should learn more about routing
You should learn HTML,CSS and Bootstrap again
*/
Route::post('/saveTask', 'Taskcontroller@store');
Route::get('/markascompleted/{id}', 'Taskcontroller@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}', 'Taskcontroller@UpdateTaskAsNotCompleted');
Route::get('/deletetask/{id}', 'Taskcontroller@DeleteTask');

Route::get('/updatetask/{id}', 'Taskcontroller@UpdateTaskView');
Route::post('/updatetasks/{id}', 'Taskcontroller@updatetask');