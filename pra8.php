<?php
class Cat {
    protected $name;
    protected $color;

    public function __construct($name = 'cute', $color = 'white')
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getDetail()
    {
        return ['name' => $this->name, 'color' => $this->color];
    }
}

$cat = new Cat();
var_dump($cat->getDetail());

$cat =new Cat('pretty', 'black');
var_dump($cat->getDetail());
