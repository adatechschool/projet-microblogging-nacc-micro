<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Define the fields that can be mass-assigned
    protected $fillable = ['image_path', 'content'];

    // Ensure these fields are not cast as dates
    protected $casts = [
        'image_path' => 'string',
        'content' => 'string',
    ];
}
