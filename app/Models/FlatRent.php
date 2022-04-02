<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatRent extends Model
{
    use HasFactory;

    public $fillable = [
        'status',
        'voivodeship',
        'district',
        'commune',
        'street',
        'area',
        'price',
        'rooms_nr',
        'description',
        'title',
        'phones_nr',
        'floor_nr',
        'year_build',
        'kitchen_type',
        'media',
        'heating',
        'parking',
        'furniture',
        'lift',
        'attic',
        'two_levels',
        'balcony',
        'basement',
        'fitted_kitchen',
        'condition',
        'closed_estate',
        'broker_email',
        'broker_phone',
        'images'
    ];
}
