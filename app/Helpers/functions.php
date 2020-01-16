<?php

use Illuminate\Support\Collection;

if (! function_exists('wrapHodelData')) {
    /**
     * Create a hotel data wrapper from a certain model
     *
     * @param  mixed  $items
     * @return Mixed $result
     */
    function wrapHodelData($items, $wrapper)
    {
        // if collection map through and wrap each model
        if ($items instanceof Collection) {
            $result = $items->map(function ($item) {
                return new $wrapper($item);
            });

            return $result;
        }

        // return wrapped items
        return new $wrapper($items);
    }
}
