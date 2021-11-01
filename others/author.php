<?php

include 'person.php'; 

//Class B 
class Author extends Person{

    public static $centuryPopular = "19th"; 
    protected $penName = "Mark Twain";

    protected function getPenName(){
        return $this -> penName.PHP_EOL; 
    }

    public function getFullName(){
        echo "Author -> getFullName()".PHP_EOL; 
        return $this->firstName." ".$this->lastName.PHP_EOL; 
    }


    /**
     * Quando dichiaro un metodo statico, devo fare affidamento solamente al mio metodo 
     * oppure ad altri metodi/variabili statici. 
     * 
     * Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. 
     * these can also be accessed statically within an instantiated class object.
     * 
     * Because static methods are callable without an instance of the object created, the pseudo-variable $this is not 
     * available inside methods declared as static.
     */
    public static function getCenturyAuthorWasPopular(){
        return self::$centuryPopular; 
    }

}
?>