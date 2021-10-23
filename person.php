<?php
//Class A
class Person{

    Const AVG_LIFE_SPAN = 80;

    private $firstName; 
    private $lastName; 
    private $yearBorn; 

    function __construct($tempFirst = "", $tempLast = "", $tempBorn = 1899){
        echo "Person constructor".PHP_EOL;         
        $this -> firstName = $tempFirst; 
        $this -> lastName = $tempLast; 
        $this -> yearBorn = $tempBorn;
    }

    protected function getFirstName(){
        return $this -> firstName.PHP_EOL; 
    }

    protected function setFirstName($tempName){
        $this -> firstName = $tempName; 
    }

    private function getFullName(){
        echo "Person -> getFullName()".PHP_EOL; 
        return $this->firstName." ".$this->lastName.PHP_EOL; 
    }
}

?>