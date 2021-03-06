<?php
/**
 * OpenWeatherMap-PHP-API — An php api to parse weather data from http://www.OpenWeatherMap.org .
 *
 * @license MIT
 *
 * Please see the LICENSE file distributed with this source code for further
 * information regarding copyright and licensing.
 *
 * Please visit the following links to read about the usage policies and the license of OpenWeatherMap before using this class.
 * @see http://www.OpenWeatherMap.org
 * @see http://www.OpenWeatherMap.org/about
 * @see http://www.OpenWeatherMap.org/copyright
 * @see http://openweathermap.org/appid
 */

namespace cmfcmf\OpenWeatherMap\Util;

class City
{
    public $id;
    
    public $name;
    
    public $lon;
    
    public $lat;
    
    public $country;
    
    public function __construct($id, $name, $lon, $lat, $country)
    {
        $this->id = (int)$id;
        $this->name = (string)$name;
        $this->lon = (float)$lon;
        $this->lat = (float)$lat;
        $this->country = (string)$country;
    }
}
