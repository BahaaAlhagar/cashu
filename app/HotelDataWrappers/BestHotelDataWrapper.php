<?php

namespace App\HotelDataWrappers;

use App\HotelDataWrappers\Interfaces\HotelDataWrapperInterface;

/**
 * Wrapper for easily accessing hotel data
 */
class BestHotelDataWrapper extends BaseWrapper
{
    public function getHotelName()
    {
        return $this->model->hotel ?? '';
    }
    
    public function getFare()
    {
        return $this->model->hotelFare ?? '';
    }
    
    public function getDiscount()
    {
        return $this->model->discount ?? '0';
    }
    
    public function getAdultsCount()
    {
        return $this->model->numberOfAdults ?? '';
    }
    
    public function getHotelRate()
    {
        return $this->model->hotelRate ?? '';
    }

    public function getAmenities()
    {
        return $this->model->roomAmenities ?? '';
    }
}
