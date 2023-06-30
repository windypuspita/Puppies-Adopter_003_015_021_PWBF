<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hamster extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'breed',
        'age',
        'weight',
        'height',
        'description',
        'image',
        'price'
        // 'biteyness',
    ];
}
