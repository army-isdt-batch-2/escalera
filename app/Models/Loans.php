<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Loans extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "loans";

    protected $fillable = [
            'employee_id',
            'full_name',
            'designation',
            'loan_type',
            'loan_amount',
            'months_payable',
            'notes',
            'created_at',
            'updated_at',
            'deleted_at'
    ];
}
