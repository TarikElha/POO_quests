<?php

class Speedometer
{
    public const KM_TO_MILES_CONVERSION = 0.621371;

    public static function convertKmToMiles(int $km) :float
    {
        return round(self::KM_TO_MILES_CONVERSION * $km, 2);
    }

    public static function convertMilesToKm(int $miles) :float
    {
        return round($miles / self::KM_TO_MILES_CONVERSION, 2);
    }
}
