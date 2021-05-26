<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leaves extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "leaves";

    protected $fillable = [
            'employee_id',
            'full_name',
            'designation',
            'leave_type',
            'start',
            'end',
            'notes',
            'created_at',
            'updated_at',
            'deleted_at'
    ];
}
