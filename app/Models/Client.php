<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable =[
        "first_name",
        "last_name",
        "username",
        "email",
        "password", 
        "phone",
        "address",
        "photo",];



         ///////////////// Has_many Relations ///////////////
        public function logs(){
            return $this->hasMany('App\Models\Log' , 'client_id');
        }

        public function requestTable(){
            return $this->hasMany('App\Models\RequestTable' , 'client_id');
        }

        public function contractBuy(){
            return $this->hasMany('App\Models\ContractBuy' , 'client_id');
        }

        public function contractRent(){
            return $this->hasMany('App\Models\ContractRent' , 'client_id');
        }

        public function reportStatus(){
            return $this->hasMany('App\Models\ReportStatus' , 'client_id');
        }


        //////////////// Belongs_To_Many Relations ////////////////
        public function vehicles(){
            return $this->belongsToMany('App\Vehicle', 'favorite_vehicles', 'vehicle_id', 'client_id')->withTimestamps();
        }
}
