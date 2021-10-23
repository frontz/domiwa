<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'voivodeship',
        'district',
        'commune',
        'street',
        'area',
        'price',
        'price_for_meter',
        'rooms_nr',
        'description',
        'title',
        'market'
    ];
}
