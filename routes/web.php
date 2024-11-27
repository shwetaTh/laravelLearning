<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name'=>'Shweta']);
});

// Route::get('/testing', function () {
//     return view('testing');
// });

//we can use view for direct routing to a view
Route::view('/testing', 'testing');


Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/hi', function () {
    return "Hello :D";
});

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return ' Hello, user '.$id. '. Your name is '.$name; //getting data through url  eg 8000/user/2-> user 2
});

Route::get('/multi/{num}', function (int $num) {
    return view('multi', ['num'=>$num]);
});

//to redirect from one to another
//Route::redirect('/hi', '/testing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


