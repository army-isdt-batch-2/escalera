<?php

use Illuminate\Support\Facades\Route;

Route::get('/department',[
    App\Http\Controllers\DepartmentController::class,
    'department'
])->name('department');

Route::get('/department/create',[
    App\Http\Controllers\DepartmentController::class,
    'department_create'
])->name('department.create');

Route::post('/department/create/save',[
    App\Http\Controllers\DepartmentController::class,
    'save'
    
 ])->name('department.create.save');
