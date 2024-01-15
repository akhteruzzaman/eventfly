<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BaseController;


Route::match(['GET', 'POST'], '/auth', [AuthController::class, 'authenticate'])->name('auth');

Route::group(['middleware' => ['verify.shopify']], function () { 
    

    /*
    //OLD

    Route::get('/',[BaseController::class,'dashboard'])->name('dashboard');    
    Route::get('/events',[EventController::class,'getEvents'])->name('events');
    Route::post('/add-event', [EventController::class, 'eventStore'])->name('add.event');
    Route::get('/event-update-data/{id}',[EventController::class,'eventUpdateData'])->name('event-update-data');
    Route::delete('/delete-event/{id}', [EventController::class, 'deleteEvent'])->name('delete.event');    
    */

    Route::get('/', function () {
        return view('welcome');
    });
    

    Route::post('/add-event', [EventController::class, 'store'])->name('add.event');
    Route::get('/fetch-events', [EventController::class, 'fetchEvents']);


});


