<?php

namespace App\HotelDataWrappers;

use App\HotelDataWrappers\Interfaces\HotelDataWrapperInterface;

/**
 * Base hotel data wrapper
 */
abstract class BaseWrapper implements HotelDataWrapperInterface
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Get model property
     * @param  Mixed $property
     * @return Mixed
     */
    public function __get($property)
    {
        if ($this->model->$property) {
            return $this->model->$property;
        }

        throw new Exception("Undefined property {$property}");
    }
}
