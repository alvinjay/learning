<?php

Route::get('/', 'TasksController@index');
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', 'UsersController@show');
