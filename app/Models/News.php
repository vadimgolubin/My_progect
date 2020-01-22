<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $filliable = [
        'title', 'img','text'
    ];
}
