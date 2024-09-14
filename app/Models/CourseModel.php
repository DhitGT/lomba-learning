<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;

    protected $table = 'courses';
    // protected $primaryKey = 'id';

    // Add this if you want to specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'description',
        'teacher_id',
        'start_date',
        'end_date',
    ];
}
