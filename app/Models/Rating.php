<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable =[
        "final_rate",
        "sum_of_ratings",
        "sum_of_raters",];
}
