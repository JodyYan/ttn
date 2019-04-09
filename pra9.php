<?php
abstract class Animal
{
    protected $name;
    protected $color;
    public function getDetail()
    {
        return ['name' => $this->name, 'color' => $this->color];
    }

    abstract public function getFavoriteFood();
}

class Cat extends Animal
{
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getFavoriteFood()
    {
        return 'fish';
    }
}

class Dog extends Animal
{
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getFavoriteFood()
    {
        return 'bone';
    }
}
$cat = new Cat('pretty', 'black');
var_dump($cat->getDetail());
var_dump($cat->getFavoriteFood());


$cat2 = new Cat('cute', 'white');
var_dump($cat2->getDetail());
var_dump($cat2->getFavoriteFood());


$dog = new Dog('lucky', 'yellow');
var_dump($dog->getDetail());
var_dump($dog->getFavoriteFood());
