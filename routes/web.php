<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\Phonebook\PhonebookController;
use App\Http\Controllers\Chat\ChatController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//laravel vue live chat
Route::get('/chat',[ChatController::class,'index']);
Route::post('/send',[ChatController::class,'send']);


/*Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');*/



/*Route::get('/{name}',function (){
    return redirect('/chat');
})->where('name',['A-Za-z+']);*/

