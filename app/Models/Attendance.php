<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';
    // protected $primaryKey = 'id';

    // Add this if you want to specify which attributes are mass assignable
    protected $fillable = [
        'attendance_id',
        'course_id',
        'student_id',
        'date',
        'status',
    ];
}
