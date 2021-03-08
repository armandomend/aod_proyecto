<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $fillable =[
        'brand', 'model', 'color', 'number', 'mmen', 'woman',  'description', 'comment'
    ];
}
