<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable =[
        "description",
        "is_available",
        "engine_force",
        "fuel",
        "kilometrage",
        "max_speed",
        "status",
        "price", 
        "has_offer",
        "price_after_offer",
        "rent_price",
        "origin_country",
        "transmission",
        "exterior_color",
        "interior_color",
        "year",
        "body",
        "service_type",
        "rating_id",
        "brand_id",
        "special_offer_id",];
}
