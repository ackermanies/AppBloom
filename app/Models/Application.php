<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'image',
        'name',
        'developer',
        'version',
        'description'
    ];
}
