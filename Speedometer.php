<?php 
class Speedometer
{
    public const KM_CONVERSION = 0.6215;
    
    public const MILES_CONVERSION =  1.609 ;
   

    public static function convertKmToMiles(float $convert): ?float

    {   

        return $convert * self::KM_CONVERSION;

    }


    public static function convertMilesToKm(float $convert): ?float

    {   

        return $convert * self::MILES_CONVERSION;

    }

}


$Km =Speedometer::convertKmToMiles('10');

echo $Km ."KM" ."<br>";

$Miles =Speedometer::convertMilesToKm('10');

echo $Miles . "Miles";