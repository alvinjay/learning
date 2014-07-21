<?php

Route::get('/', function () {
     return View::make('hello');
});

Route::get('/retrieve/{username}', function ($username) {

    $user = User::whereRaw('username = ?', array($username))->get();

    return $user;
});

Route::get('/delete/{username}', function ($username) {

    $user = User::whereRaw('username = ?', array($username))->get();
    $user->delete();
    
    $users = User::all();
    
    foreach ($users as $user) {
    }
    
    return $users;
});

Route::get('/alvin', function () {
    $user = new User;
    $user->username = 'ariettejune';
    $user->password = 'alvinjay';
    $user->save();

    $users = User::all();

    return $users;
});
