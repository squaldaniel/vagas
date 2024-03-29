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
    return view('adminlte.bodyteste');
});
Route::get('register', function(){
   return view('adminlte.pages.examples.register-v2');
});
Route::post('/register/user', [App\Http\Controllers\UserController::class, 'addnewuser']);