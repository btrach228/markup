<?php

class ValueObject
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }
    public function getRed(){
        return $this->red;
    }
    public function setRed($red){
        return "Color red set to: ". $this->red = $this->check($red) . '</br>';;
    }

    public function getGreen(){
        return $this->green;
    }

    public function setGreen($green){
        return "Color red set to: ". $this->green = $this->check($green) . '</br>';;

    }

    public function getBlue(){
        return $this->blue;
    }

    public function setBlue($blue){
        return "Color red set to: ". $this->blue = $this->check($blue) . '</br>';;
    }

    public function rgbToRandom(){
        $rRed = $this->check(rand(0,255));
        $rGreen = $this->check(rand(0,255));
        $rBlue = $this->check(rand(0,255));

        return '#' . $rRed  . $rGreen . $rBlue;
    }

    public function compare2(ValueObject $color): bool{
        return $this->red == $color->red || $this->green == $color->green || $this->blue == $color->blue;
    }

    public function mix(ValueObject $color): ValueObject
    {
        $avgRed   = (int) round(($this->getRed()   + $color->getRed())   / 2);
        $avgGreen = (int) round(($this->getGreen() + $color->getGreen()) / 2);
        $avgBlue  = (int) round(($this->getBlue()  + $color->getBlue())  / 2);

        return new self($this->check($avgRed), $this->check($avgGreen), $this->check($avgBlue));
    }

    private function check($value){
        $value = (int)$value;
        if($value < 0 || $value > 255){
            return new Exception("Color code must be between 0 and 255");
        }
        return $value;
    }

};

$color = new ValueObject(100,100,100);
var_dump($color);

//set - get
//var_dump($color->setGreen(1 ));
//var_dump($color->getGreen());

//random
//var_dump($color->rgbToRandom());

//compare

//var_dump($color->compare2(new ValueObject(100,110,130)));

//mix

var_dump($color->mix(new ValueObject(250,250,250)));
?>