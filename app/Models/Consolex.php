<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consolex extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'logo',
        'description',
    ];
}
