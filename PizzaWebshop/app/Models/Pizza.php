<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    // protected $table = 'some_name';
    // The following will will cast from a certain data value to another back and forth. This will put array and convert it into json and vice versa

    protected $casts = [
        'toppigs' => 'array'
    ];
}
