<?php
//use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Custom Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    dd('Welcome to custom user routes.');
}); 