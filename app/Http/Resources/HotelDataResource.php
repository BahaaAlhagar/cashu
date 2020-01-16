<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelDataResource extends JsonResource
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
            'city_code'  =>  (string) $this->city,
            'city'  =>  (string) $this->city_name,
            'provider'  =>  (string) $this->data_provider,
            'hotel_name'    =>  (string) $this->getHotelName(),
            'fare'    =>  (float) $this->getFare(),
            'discount'  =>  (int) $this->getDiscount() . '%',
            'hotel_rate'    =>  (float) $this->getHotelRate(),
            'adults_count'  =>  (int) $this->getAdultsCount(),
            'amenities'    =>  (array) $this->getAmenities(),
        ];
    }
}
