<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Add title and content to the $fillable property
    protected $fillable = [
        'title',    // Allow mass assignment for the 'title' field
        'content',  // Allow mass assignment for the 'content' field
    ];
}
