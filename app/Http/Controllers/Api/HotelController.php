<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelDataResource;
use App\Http\Requests\Api\HotelSearchRequest;
use App\HotelDataFetchers\TopHotelDataFetcher;
use App\HotelDataFetchers\BestHotelDataFetcher;

class HotelController extends Controller
{
    /**
     * Data fetching classes
     * @var array
     */
    protected $dataFetchers;

    /**
     * Hotels data collection
     * @var Illuminate\Support\Collection
     */
    protected $hotelsData;

    /**
     * On creation
     */
    public function __construct()
    {
        $this->dataFetchers = [
            BestHotelDataFetcher::class,
            TopHotelDataFetcher::class,
        ];

        $this->hotelsData = collect([]);
    }

    /**
     * Search for hotels based on request
     * @param  Request $request
     * @return Illuminate\Http\Response
     */
    public function index(HotelSearchRequest $request)
    {
        foreach ($this->dataFetchers as $fetcher) {
            $this->hotelsData->push((new $fetcher)->searchHotels($request));
        }

        return HotelDataResource::collection($this->hotelsData->flatten());
    }
}
