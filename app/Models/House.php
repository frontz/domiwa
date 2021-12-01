<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    public $fillable = [
        'market',
        'status',
        'voivodeship',
        'district',
        'commune',
        'street',
        'area',
        'price',
        'rooms_nr',
        'utility_rooms_nr',
        'description',
        'title',
        'plot_area',
        'building_type',
        'floors_nr',
        'bathrooms_nr',
        'heating',
        'driveway',
        'balcony',
        'water_connection',
        'decorated_garden',
        'electricity',
        'power',
        'sewers',
        'roof_type',
        'condition',
        'property_type',
        'exclusivity',
        'without_commission',
        'broker_email',
        'broker_phone',
        'images'];
}
