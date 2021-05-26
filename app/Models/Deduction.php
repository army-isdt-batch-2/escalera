<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Deduction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "deduction";

    protected $fillable = [
        'contribution_type',
        'base_range',
        'monthly_contribution',
        'employee_share',
        'employer_share',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
