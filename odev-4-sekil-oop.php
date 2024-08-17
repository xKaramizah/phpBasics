<?php

abstract class Sekil
{
    public $firstEdge;
    public $secondEdge;

    public function __construct($firstEdge, $secondEdge)
    {
        $this->firstEdge = $firstEdge;
        $this->secondEdge = $secondEdge;
    }

    abstract public function area();

    abstract public function perimeter();

}

class Dikdortgen extends Sekil
{
    public function area()
    {
        return $this->firstEdge * $this->secondEdge;
    }

    public function perimeter()
    {
        return ($this->firstEdge + $this->secondEdge) * 2;
    }
}

class Ucgen extends Sekil
{
    public function area()
    {
        return $this->firstEdge * $this->secondEdge / 2;
    }

    public function perimeter()
    {
        return $this->firstEdge + $this->secondEdge + bcsqrt(pow($this->firstEdge, 2) + pow($this->secondEdge, 2));
    }
}

class Kare extends Sekil {

    public function area()
    {
        return pow($this->firstEdge, 2);
    }

    public function perimeter()
    {
        return $this->firstEdge * 4;
    }
}

$dikdortgen = new Dikdortgen(5,10);
$ucgen = new Ucgen(3,4);
$kare = new Kare(5, 5);


echo 'Dikdörtgen: 5 ve 10 için => Alan: ' . $dikdortgen->area() . ', Çevre ' . $dikdortgen->perimeter() . '<br>';

echo 'Üçgen: 3 ve 4 için => Alan: ' . $ucgen->area() . ', Çevre ' . $ucgen->perimeter() . '<br>';

echo 'Kare: 5 ve 5 için => Alan: ' . $kare->area() . ', Çevre ' . $kare->perimeter() . '<br>';
