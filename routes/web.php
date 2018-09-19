
<?php
Route::get('/', function () {
   return 'Home';
});


Route::get('/users', 'UserController@index')
    ->name('users.index');

Route::get('/users/{user}', 'UserController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');


Route::get('/users/new', 'UserController@create')->name('users.create');

Route::post('/users', 'UserController@store');

Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');

Route::put('/users/{user}', 'UserController@update');


Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');


Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');

Route::get('/login', 'LoginController@index');
