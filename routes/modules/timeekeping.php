<?php

use Illuminate\Support\Facades\Route;


Route::get('/timekeeping',[
    App\Http\Controllers\TKController::class,
    'timekeeping'
])->name('timekeeping');


Route::get('/timekeeping/create',[
    App\Http\Controllers\TKController::class,
    'TK_create'
])->name('timekeeping.create');

Route::get('/timekeeping/view',[
    App\Http\Controllers\TKController::class,
    'TK_view'
])->name('timekeeping.view');

Route::post('/timekeeping/create/save',[
    App\Http\Controllers\TKController::class,
    'save'
    
 ])->name('timekeeping..create,save');

