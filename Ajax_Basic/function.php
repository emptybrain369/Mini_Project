<?php
$check = $_POST['check']; 
$check();
/*ADD*/
function add(){
$a = $_POST['val1']; 
$b = $_POST['val2']; 
$result = $a + $b;
echo $result;
}
/*SUB*/
function sub(){
    $a = $_POST['val1']; 
    $b = $_POST['val2']; 
    $result = $a - $b;
    echo $result;
    }
    /*MULTI*/
function mul(){
    $a = $_POST['val1']; 
    $b = $_POST['val2']; 
    $result = $a * $b;
    echo $result;
    }
    /*DIV*/
function div(){
    $a = $_POST['val1']; 
    $b = $_POST['val2']; 
    $result = $a / $b;
    echo $result;
    }
?>