<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class RequestTable extends Model
{
    protected $fillable =[
        "date",
        "type",
        "start_date",
        "end_date",
        "client_id",
        "vehicle_id",
        'status'
    ];
}
