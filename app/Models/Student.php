<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    public $timestamps = true;

    protected $fillable = [
        'student_name',
        'parent_name',
        'gender',
        'address',
        'age',
        'created_at'
    ];
}
