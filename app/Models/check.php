<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check extends Model
{
    /** @use HasFactory<\Database\Factories\CheckFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
    ];
}
