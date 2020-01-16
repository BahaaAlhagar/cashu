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
            'city_code'  =>  $this->city,
            'city'  =>  $this->city_name,
            'provider'  =>  $this->data_provider,
            'hotel_name'    =>  $this->getHotelName(),
            'fare'    =>  $this->getFare(),
            'discount'  =>  $this->getDiscount(),
            'hotel_rate'    =>  $this->getHotelRate(),
            'adults_count'  =>  $this->getAdultsCount(),
            'amenities'    =>  $this->getAmenities(),
        ];
    }
}
