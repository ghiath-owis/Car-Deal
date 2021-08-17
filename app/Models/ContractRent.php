<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractRent extends Model
{
    protected $fillable =[
        "start_date",
        "end_date",
        "image",
        "customer_id",
        "vehicle_id",
        "owner_id",];
}
