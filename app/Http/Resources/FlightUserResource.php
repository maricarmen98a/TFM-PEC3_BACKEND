<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FlightUserResource extends JsonResource
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
            'flight_id' => $this->flight_id,
            'user_id' => $this->user_id,
            'reservation_code' => $this->reservation_code,
          
        ];
    }
}
