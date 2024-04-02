<?php

class WeatherModel
{
    private $apiKey = 'a6c09f4fc819935084326c5941295979';

    public function getAllData()
    {
        $url = "http://api.openweathermap.org/data/2.5/group?id=2643743,703448,1850147,2147714,5128638,2988507,1835848,524901&appid={$this->apiKey}";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response, true);
    }

    public function getWeatherById($cityId, $cityData)
    {
        foreach ($cityData['list'] as $city) {
            if ($city['id'] == $cityId) {
                return $city;
            }
        }
        return null;
    }
}
