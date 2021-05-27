<?php

use Illuminate\Support\Facades\Route;

Route::get('/mandatorydeduction',[
    App\Http\Controllers\MDController::class,
    'mandatorydeduction'
])->name('mandatorydeduction');


Route::get('/mandatorydeduction/create',[
    App\Http\Controllers\MDController::class,
    'MD_create'
])->name('deduction.create');

Route::post('/mandatorydeduction/create/save',[
    App\Http\Controllers\MDController::class,
    'save'
    
 ])->name('deduction.create.save');