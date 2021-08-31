<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportStatusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
            'id' => $this->id,
            'content' => $this->content,
            'date' => $this->date,
            'client' => $this->client_id,
            'vehicle' => $this->vehicle_id,
            'request_table' => $this->request_table_id,
    }
}
