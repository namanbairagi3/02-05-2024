<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/anil', function () {
    return view('anil');
});

Route::get('/A1', function () {
    return view('A1');
});

Route::get('/abhi', function () {
    return 'Hello I am abhi route';
});

Route::get('/A', function () {
    return 'Hello I am A route';
});

//     get(arg1,arg2)
//
//Class::get(string,cbfn)
Route::get('/rishabh', function () { return 'Hello I am rishabh route'; });


?>