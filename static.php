<?php
class weather{
    public static $tempcondtions=["sunny","rainy","cloudy","snowy"];
    public static function celsiustoFahrenheit($c){
     return ($c * 9/5) + 32;
    }
    public static function determineTemperature($f){
        if($f<32){
            return self::$tempcondtions[0];
        }else if($f>=32 && $f<=70){
            return self::$tempcondtions[1];
        }else if($f>70 && $f<=90){
            return self::$tempcondtions[2];
       
        }else{
            return self::$tempcondtions[3];
        }
    }
}
echo weather::determineTemperature(80)."<br>";
echo weather::$tempcondtions[0]."<br>";
echo weather::celsiustoFahrenheit(30)."<br>";
print_r(weather::$tempcondtions);

// $weatherinstance=new weather();
// print_r($weatherinstance->tempcondtions);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>