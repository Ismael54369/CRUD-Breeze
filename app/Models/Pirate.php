<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pirate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'crew', 
        'role', 
        'bounty', 
        'has_fruit', 
        'poster_date'
    ];
}
