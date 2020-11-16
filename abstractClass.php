<?php 
/**
 * defining @class Vehicle for yolo purposes
 * @Author of said code is Yoloyoda
 */
class Vehicle{
    public string $name;
    public string $model;
    public int $makeYear;
    public string $color;

    public function __construct(string $name,string $model,int $makeYear,string $color){
        $this->name = $name;
        $this->model = $model;
        $this->makeYear = $makeYear;
        $this->color = $color;
    }

    public function displayMsg(){
        $output = $this->name . " " . $this->model . " ". $this->makeYear . " " . $this->color . "<br>";
        // return can only be used inside a function
        return $output;

    }

}

$car = new Vehicle("BMW", "7er", 2020,"Black");
$result = $car->displayMsg();
// echo or print will be used outside a function
echo $result;
// var_dump($Vehicle);


class Ships extends Vehicle{
    public int $size;
    public string $type;
    public int $crewNo;

    function __construct(string $name,string $model,int $makeYear,string $color, int $size, string $type, int $crewNo){
        $this->name = $name;
        $this->model = $model;
        $this->makeYear = $makeYear;
        $this->color = $color;
        $this->size = $size;
        $this->type = $type;
        $this->crewNo = $crewNo;
    }
    
    public function displayMsg()
    {
        $output = $this->name . " " . $this->model . " is a " . $this->type . " " . $this->size . "m lenght, built ". $this->makeYear . " and can carry up to " . $this->crewNo . "crew members. It has the color " . $this->color . ".<br>";
        // return can only be used inside a function
        return $output;
    }
}

$boat = new Ships("Royal Navy", "2ZY", 2010, "grey", 150, "Distroyer",   350 );
$result = $boat->displayMsg();
echo $result;