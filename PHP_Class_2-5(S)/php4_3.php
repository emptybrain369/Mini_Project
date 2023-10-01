<?php
class Human{
    private $name;
    public function eat($personName){
        echo $this->name=$personName."<br>";
        echo "I am eating!<br>";
        $this->learn();
        $this->write();
    }
    private function learn(){
        echo "I am learning PHP<br>";
    }
    protected function write(){
        echo "I am writing!<br>";
    }
}
$h1=new Human();
$h1->eat("Giash Uddin");
$sajnin=new Human();
$sajnin->eat("Sajnin");
?>