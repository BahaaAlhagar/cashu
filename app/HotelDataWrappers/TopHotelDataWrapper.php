<?php

namespace App\HotelDataWrappers;

use App\HotelDataWrappers\Interfaces\HotelDataWrapperInterface;

class TopHotelDataWrapper implements HotelDataWrapperInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
}
