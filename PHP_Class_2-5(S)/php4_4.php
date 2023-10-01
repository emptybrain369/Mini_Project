<?php
class Human{
    private $name;
    private $age;
    public function __construct($n,$a){
    echo $this->name="My name is {$n} <br>";
    echo $this->age="I'm {$a} years old. <br>";
    }
}
$h1=new Human("Roton Ahmed",25);
?>