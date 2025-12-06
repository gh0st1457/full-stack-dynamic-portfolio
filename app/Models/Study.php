<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'level',        // e.g. "BSc in Computer Science"
        'institution',  // e.g. "University of Technology"
        'start_year',   
        'end_year',
        'grade',
        'description'
    ];
}