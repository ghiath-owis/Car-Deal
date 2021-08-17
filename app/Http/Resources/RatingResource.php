<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
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
            'final_rate' => $this->final_rate,
            'sum_of_ratings' => $this->sum_of_ratings,
            'sum_of_raters' => $this->sum_of_raters,
        ];
    }
}
