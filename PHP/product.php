<?php
class Product 
{
    public $SKU;
    public $name;
    public $price;
    public $type;
    public $value;

    public function __construct ($array)
    {   
        $numberOfParameters = sizeof($array);
        $constructor = '__construct'.$numberOfParameters;
        call_user_func_array(array($this, $constructor), $array);
    }

    public function __construct5 ($SKU, $name, $price, $type, $value)
    {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->value = $value;
    }

    public function __construct7 ($SKU, $name, $price, $type, $value1, $value2, $value3)
    {
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->value = $value1."x".$value2."x".$value3;
    }

    public function getSKU() {
        return $this->SKU;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getValue() {
        return $this->value;
    }
    public function getType() {
        return $this->type;
    }
    public function setType($type) {
        $this->type = $type;
    }
}