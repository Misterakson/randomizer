<?php

class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        echo $this->name;
    }
}

class Cat extends Animal
{

    public function meow()
    {
        echo 'Cat '.$this->name.' is saying meow';
    }

}


$cat = new Cat('Garfield');
$cat->getName();
echo "<br>";
$cat->meow();

