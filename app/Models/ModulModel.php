<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulModel extends Model
{
    use HasFactory;

    protected $table = 'moduls';
    // protected $primaryKey = 'id';

    // Add this if you want to specify which attributes are mass assignable
    protected $fillable = [
        'userId',
        'title',
        'description',
        'content',
        'imageCover',
        'category',
    ];
}
