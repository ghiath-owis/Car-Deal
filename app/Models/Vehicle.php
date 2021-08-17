<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable =[
        "description",
        "is_available",
        "engine_force",
        "logo",
        "fuel",
        "kilometrage",
        "max_speed",
        "status",
        "price",
        "has_offer",
        "price_after_offer",
        "buy_id",
        "owner_id",
        "origin_country_id",
        "condition_id",
        "year_id",
        "transmission_id",
        "body_id",
        "exterior_id",
        "interior_id",
        "address_id",
        "rating_id",
        "coin_id",
        "brand_id",
        "special_offer_id",];
}
