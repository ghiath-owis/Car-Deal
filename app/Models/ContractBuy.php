<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractBuy extends Model
{
    protected $fillable =[
        "date",
        "client_id",
        "vehicle_id"];
}
