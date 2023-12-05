<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicels extends Model
{
    use HasFactory;

    protected $table = 'vehicels';
    protected $fillable = [
        'title',
        'image',
        'summary',
        'future',
        'price',
        'liftcapacity',
        'transmission',
        'engine',
        'maximumhp',
        'starttime',
        'endtime',
    ];
}
