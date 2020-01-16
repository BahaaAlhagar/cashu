<?php

use Illuminate\Support\Collection;

if (! function_exists('wrapHotelData')) {
    /**
     * Create a hotel data wrapper from a certain model
     *
     * @param  mixed  $items
     * @return Mixed $result
     */
    function wrapHotelData($items, $wrapper)
    {
        // if collection map through and wrap each model
        if ($items instanceof Collection) {
            $result = $items->map(function ($item) use ($wrapper) {
                return new $wrapper($item);
            });

            return $result;
        }

        // return wrapped items
        return new $wrapper($items);
    }
}
