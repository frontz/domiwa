<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premises extends Model
{
    use HasFactory;

    public $fillable = [
        'status',
        'market',
        'voivodeship',
        'district',
        'commune',
        'city',
        'street',
        'area',
        'price',
        'rooms_nr',
        'title',
        'description',
        'phones_nr',
        'year_build',
        'n_geo_x',
        'n_geo_y',
        'type',
        'destination',
        'air_conditioning',
        'security',
        'office',
        'office_type',
        'shopwindow',
        'water_connection',
        'intercom',
        'height',
        'condition',
        'exclusivity',
        'without_commission',
        'property_form',
        'broker_email',
        'broker_phone',
        'images'
    ];
}
