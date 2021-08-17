<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'description' => $this->description,
            'is_available' => $this->is_available,
            'engine_force' => $this->engine_force,
            'logo' => $this->logo,
            'fuel' => $this->fuel,
            'kilometrage' => $this->kilometrage,
            'max_speed' => $this->max_speed,
            'status' => $this->status,
            'price' => $this->price,
            'has_offer' => $this->has_offer,
            'price_after_offer' => $this->price_after_offer,
            'buy' => $this->buy_id,
            'owner' => $this->owner_id,
            'origin_country' => $this->origin_country_id,
            'condition' => $this->condition_id,
            'year' => $this->year_id,
            'transmission' => $this->transmission_id,
            'body' => $this->body_id,
            'exterior' => $this->exterior_id,
            'interior' => $this->interior_id,
            'address' => $this->address_id,
            'rating' => $this->rating_id,
            'coin' => $this->coin_id,
            'brand' => $this->brand_id,
            'special_offer' => $this->special_offer_id,
        ];
    }
}
