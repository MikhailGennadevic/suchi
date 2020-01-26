<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class HomeController extends Controller
{
    private $_weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->_weatherService = $weatherService;
    }

    public function index()
    {
        $weather = $this->_weatherService->get();
        return view('index', ['weather' => $weather]);
    }
}
