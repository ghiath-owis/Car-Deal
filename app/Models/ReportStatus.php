<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ReportStatus extends Model
{
    protected $fillable =[
        "content",
        "date",
        "client_id",
        "vehicle_id",];
}
