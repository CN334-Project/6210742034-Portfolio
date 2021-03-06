<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = "education";
    protected $fillable = [
        'university_name',
        'department_name',
        'GPA',
        'faculty',
        'startyear',
        'endyear'
    ];
    public $timestamps = false;
}
