<?php

use Illuminate\Support\Facades\Route;

Route::get('/login',[
    App\Http\Controllers\LoginController::class,
    'index'
]);

Route::get('/table',[
    App\Http\Controllers\LoginController::class,
    'table'
]);
Route::get('/layout',[
    App\Http\Controllers\LoginController::class,
    'layout'
])->name('layout');
Route::get('/employees',[
    App\Http\Controllers\EmployeesController::class,
    'employees'
])->name('employees');
Route::get('/department',[
    App\Http\Controllers\DepartmentController::class,
    'department'
])->name('department');
Route::get('/loans',[
    App\Http\Controllers\LoansController::class,
    'loans'
])->name('loans');
Route::get('/leaves',[
    App\Http\Controllers\LeavesController::class,
    'leaves'
])->name('leaves');
Route::get('/mandatorydeduction',[
    App\Http\Controllers\MDController::class,
    'mandatorydeduction'
])->name('mandatorydeduction');
Route::get('/timekeeping',[
    App\Http\Controllers\TKController::class,
    'timekeeping'
])->name('timekeeping');
Route::get('/payslip',[
    App\Http\Controllers\PayslipController::class,
    'payslip'
])->name('payslip');
Route::get('/form',[
    App\Http\Controllers\LoginController::class,
    'form'
]);
Route::get('/department/create',[
    App\Http\Controllers\LoginController::class,
    'department_create'
]);
Route::get('/employees/create',[
    App\Http\Controllers\LoginController::class,
    'employees_create'
]);
Route::get('/leaves/create',[
    App\Http\Controllers\LoginController::class,
    'leaves_create'
]);
Route::get('/loans/create',[
    App\Http\Controllers\LoginController::class,
    'loans_create'
]);
Route::get('/mandatorydeduction/create',[
    App\Http\Controllers\LoginController::class,
    'MD_create'
]);
Route::get('/timekeeping/create',[
    App\Http\Controllers\LoginController::class,
    'TK_create'
]);
Route::get('/timekeeping/view',[
    App\Http\Controllers\LoginController::class,
    'TK_view'
]);
Route::get('/payslip/create',[
    App\Http\Controllers\LoginController::class,
    'payslip_create'
]);
Route::get('/payslip/view',[
    App\Http\Controllers\LoginController::class,
    'payslip_view'
]);

Route::post('/department/create/save',[
    App\Http\Controllers\DepartmentController::class,
    'save'
    
 ]);
 Route::post('/employees/create/save',[
    App\Http\Controllers\EmployeesController::class,
    'save'
    
 ]);
 Route::post('/leaves/create/save',[
    App\Http\Controllers\LeavesController::class,
    'save'
    
 ]);
 Route::post('/loans/create/save',[
    App\Http\Controllers\LoansController::class,
    'save'
    
 ]);
 Route::post('/mandatorydeduction/create/save',[
    App\Http\Controllers\MDController::class,
    'save'
    
 ]);
 Route::post('/payslip/create/save',[
    App\Http\Controllers\PayslipController::class,
    'save'
    
 ]);
 Route::post('/timekeeping/create/save',[
    App\Http\Controllers\TKController::class,
    'save'
    
 ]);