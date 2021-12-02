<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
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
        'description',
        'title',
        'length',
        'width',
        'type',
        'fence',
        'driveway',
        'exclusivity',
        'property_form',
        'broker_email',
        'broker_phone',
        'images'];
}
