<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'img', 
        'cat_id',
    ];
}
