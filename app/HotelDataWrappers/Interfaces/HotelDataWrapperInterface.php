<?php

namespace App\HotelDataWrappers\Interfaces;

/**
 * Base Hotel data wrapper contract
 */
interface HotelDataWrapperInterface
{
    public function getHotelName();
    public function getFare();
    public function getDiscount();
    public function getAdultsCount();
    public function getAmenities();
    public function getHotelRate();
}
