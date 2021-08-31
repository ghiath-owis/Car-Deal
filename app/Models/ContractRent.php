<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractRent extends Model
{
    protected $fillable =[
        "start_date",
        "end_date",
        "client_id",
        "vehicle_id"];
}
