<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractBuy extends Model
{
    protected $fillable =[
        "date",
        "image",
        "customer_id",
        "owner_id"];
}
