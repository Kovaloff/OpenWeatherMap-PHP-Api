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

namespace cmfcmf\OpenWeatherMap;

/**
 * Abstract cache class to be overwritten.
 */
abstract class AbstractCache
{
    /**
     * Cache time in seconds.
     */
    protected $seconds;

    /**
     * Checkes whether a cached weather data is available.
     *
     * @param string $type The type of the cached data. Can be either 'weather', 'hourlyForecast' or 'dailyForecast'.
     * @param array|int|string $query
     * @param string $units
     * @param string $lang
     * @param string $mode
     *
     * @return \DateTime|bool A \DateTime object containing the time when the weather information was last updated, false if no
     * cached information is available.
     *
     * @note This is not the time when the weather was cached, but the {@link Weather::$lastUpdate} value of the cached weather.
     * @note You need to check here if a cached result is outdated. Return false in that case.
     */
    abstract function isCached($type, $query, $units, $lang, $mode);

    /**
     * Returns cached weather data.
     *
     * @param string $type The type of the cached data. Can be either 'weather', 'hourlyForecast' or 'dailyForecast'.
     * @param array|int|string $query
     * @param string $units
     * @param string $lang
     * @param string $mode
     *
     * @return string|bool The cached data if it exists, false otherwise.
     */
    abstract function getCached($type, $query, $units, $lang, $mode);

    /**
     * Saves cached weather data.
     *
     * @param string $type The type of the cached data. Can be either 'weather', 'hourlyForecast' or 'dailyForecast'.
     * @param string $content The weather data to cache.
     * @param array|int|string $query
     * @param string $units
     * @param string $lang
     * @param string $mode
     *
     * @return bool True on success, false on failure.
     */
    abstract function setCached($type, $content, $query, $units, $lang, $mode);
    
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
    }
}
