<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
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
            'flight_number' => $this->flight_number,
            'airline' => $this->airline,
            'origin' => $this->origin,
            'destination' => $this->destination,
            'price' => $this->price,
            'boarding_time' => $this->boarding_time,
            'arrival_time' => $this->arrival_time,
            'boarding_hour' => $this->boarding_hour,
            'arrival_hour' => $this->arrival_hour,
/*             'reservation_code' => $this->reservation_code
 */        ];
    }
}
