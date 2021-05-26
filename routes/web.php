<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\Phonebook\PhonebookController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');*/

Route::resource('/task', TaskController::class);

//lists vue
//Route::get('/list',[ListController::class,'index'])->name('userlist');

//laravel vue phonebook project
Route::get('/phonebook',[PhonebookController::class,'index']);

Route::get('/{name}',function (){
    return redirect('/phonebook');
})->where('name',['A-Za-z+']);

