<?php
class Temperatura
{
    private $celsius;
    public function __construct($celsius)
    {
        $this->celsius = $celsius;
    }
    public function getCelsius()
    {
        return $this->celsius;
    }
    public function setCelsius($celsius)
    {
        $this->celsius = $celsius;
    }
    public function paraFahrenheit()
    {
        return ($this->celsius * 9 / 5) + 32;
    }
    public function paraKelvin()
    {
        return $this->celsius + 273.15;
    }
}
$t1 = new Temperatura(0);
$t2 = new Temperatura(100);
$t3 = new Temperatura(37);

echo "Temperatura: " . $t1->getCelsius() . "°C<br>";
echo "Fahrenheit: " . $t1->paraFahrenheit() . "°F<br>";
echo "Kelvin: " . $t1->paraKelvin() . " K<br><br>";

echo "Temperatura: " . $t2->getCelsius() . "°C<br>";
echo "Fahrenheit: " . $t2->paraFahrenheit() . "°F<br>";
echo "Kelvin: " . $t2->paraKelvin() . " K<br><br>";

echo "Temperatura: " . $t3->getCelsius() . "°C<br>";
echo "Fahrenheit: " . $t3->paraFahrenheit() . "°F<br>";
echo "Kelvin: " . $t3->paraKelvin() . " K<br>";
