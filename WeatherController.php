<?php

require_once 'WeatherModel.php';

class WeatherController
{
    private $weatherModel;

    public function __construct()
    {
        $this->weatherModel = new WeatherModel();
    }

    public function index()
    {
        $cityData = $this->weatherModel->getAllData();
        include 'views/home_view.php';
    }

    public function getWeather($cityId)
    {
        $cityData = $this->weatherModel->getAllData();
        $weatherData = $this->weatherModel->getWeatherById($cityId, $cityData);

        if ($weatherData) {
            include 'views/weather_view.php';
        } else {
            echo "Weather data not found for this city.";
        }
    }
}
