<?php

use Illuminate\Support\Facades\Route;

Route::get('/loans',[
    App\Http\Controllers\LoansController::class,
    'loans'
])->name('loans');

Route::get('/loans/create',[
    App\Http\Controllers\LoansController::class,
    'loans_create'
])->name('loans.create');

Route::post('/loans/create/save',[
    App\Http\Controllers\LoansController::class,
    'save'
    
 ])->name('loans..create.save');