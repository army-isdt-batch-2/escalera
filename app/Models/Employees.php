<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "employee";

    protected $fillable = [
            'photo',
            'first_name',
            'last_name',
            'middle_name',
            'contact_number',
            'address',
            'birthday',
            'gender',
            'department_id',
            'designation',
            'basic_rate_perday',
            'sss',
            'philhealth',
            'pagibig',
            'tax',
            'created_at',
            'updated_at',
            'deleted_at'
    ];
}
