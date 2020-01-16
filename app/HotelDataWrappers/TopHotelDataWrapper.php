<?php

namespace App\HotelDataWrappers;

use App\HotelDataWrappers\Interfaces\HotelDataWrapperInterface;

/**
 * Wrapper for easily accessing hotel data
 */
class TopHotelDataWrapper extends BaseWrapper
{
    public function getHotelName()
    {
        return $this->model->hotelName ?? '';
    }
    
    public function getFare()
    {
        return $this->model->price ?? '';
    }
    
    public function getDiscount()
    {
        return $this->model->discount ?? '0';
    }
    
    public function getAdultsCount()
    {
        return $this->model->adultsCount ?? '';
    }
    
    public function getHotelRate()
    {
        return $this->model->rate ?? '';
    }

    public function getAmenities()
    {
        return $this->model->amenities ?? '';
    }
}
