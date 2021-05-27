<?php

use Illuminate\Support\Facades\Route;

Route::get('/leaves',[
    App\Http\Controllers\LeavesController::class,
    'leaves'
])->name('leaves');


Route::get('/leaves/create',[
    App\Http\Controllers\LeavesController::class,
    'leaves_create'
])->name('leaves.create');

Route::post('/leaves/create/save',[
    App\Http\Controllers\LeavesController::class,
    'save'
    
 ])->name('leaves.create.save');
