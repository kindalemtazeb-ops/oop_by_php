<?php
class car{
    public $name;
    public $color;
    public $speed;
     public function __construct($name,$color,$speed){
        $this->name=$name;
        $this->color=$color;
        $this->speed=$speed;
     }
     public function drive(){
        echo "the car name is". " " .$this->name ." "."the car color is"." " .$this->color." ". "and the car speed is".$this->speed."m/s";
            
     }
     public function stop(){
        echo "the car stop at"." ".$this->speed."m/s";
     }

}
$car =new car("bagag","white",30);
$car->drive();
echo "<br>";
$car->stop();
?>