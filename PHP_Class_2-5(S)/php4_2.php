<?php
class Student{
    public $id;
    public $name;
    public $dept;

    function show($id,$name,$age){
       echo "ID: ". $this->id=$id."<br>";
       echo "Name: ". $this->name=$name."<br>";
       echo "Age: " .$this->age=$age."<br>";
    }
}

$piw= new Student();
$piw->show(101,"piw",17);

?>