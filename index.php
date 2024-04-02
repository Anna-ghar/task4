<?php

require_once 'WeatherController.php';

$weatherController = new WeatherController();
$router = isset($_GET['route']) ? $_GET['route'] : 'home';

switch ($router) {
    case 'city':
        $cityId = isset($_GET['city_id']) ? $_GET['city_id'] : '';
        $weatherController->getWeather($cityId);
        break;
    default:
        $weatherController->index();
}

