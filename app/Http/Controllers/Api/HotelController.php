<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    protected $dataFetchers;

    public function __construct()
    {
        $this->dataFetchers = [];
    }

    public function index(Request $request)
    {
        return dd($request->all());
    }
}
