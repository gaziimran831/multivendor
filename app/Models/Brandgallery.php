<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandgallery extends Model
{
    use HasFactory;
    protected $fillable = ['brand_id', 'images',];
}
