<?php

use Illuminate\Support\Facades\Route;

Route::get('/payslip',[
    App\Http\Controllers\PayslipController::class,
    'payslip'
])->name('payslip');

Route::get('/payslip/create',[
    App\Http\Controllers\PayslipController::class,
    'payslip_create'
])->name('payslip.create');

Route::get('/payslip/view',[
    App\Http\Controllers\PayslipController::class,
    'payslip_view'
])->name('payslip.view');

Route::post('/payslip/create/save',[
    App\Http\Controllers\PayslipController::class,
    'save'
    
 ])->name('payslip.create.save');