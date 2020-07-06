<?php

use Illuminate\Support\Facades\Route;
use App\Task;


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
    return redirect('/welcome');
});


Route::resource('/welcome', 'TaskController');

Route::delete('/welcome/{task->id}', 'TaskController@destroy')
    ->name('task.destroy');
