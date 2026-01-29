<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    // Esto permite guardar estos datos masivamente
    protected $fillable = ['title', 'description', 'status'];
}
