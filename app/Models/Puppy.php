<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Puppy extends Model
{

    use HasFactory, Notifiable;

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

    public function getAllPuppies()
    {
        return $this->all();
    }

    public function getPuppyById($id)
    {
        return $this->find($id);
    }
}
