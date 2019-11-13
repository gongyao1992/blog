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

use Illuminate\Http\Request;

Route::get('/', function () {

    if (App::environment('local')) {
//        var_dump(1);
//        die;
    }

    return view('welcome');
});


Route::get('/1', function (Request $request) {
    var_dump(1);
    die;
    return $request->user();
});