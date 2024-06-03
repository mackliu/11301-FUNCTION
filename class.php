<?php
class Animal
{
    public $name = 'animal';
    protected $age = 12;
    private $weight = 20;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo $this->name;
        echo " is running";
    }

    private function speed()
    {
        return 'high speed';
    }
}

class Cat extends Animal
{
    public $name = 'cat';


    public function run()
    {
        echo "cat is running";
        echo $this->speed();
        echo $this->age;
    }

    private function speed()
    {
        return 'low speed';
    }
}

$ani = new Animal('john');
$ani->run();
$dog = new Animal("Tom");
$dog->run();
/* $cat = new Cat();
echo $cat->name;
echo $cat->run(); */
//echo $cat->speed();
//echo $cat->weight;
