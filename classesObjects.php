<?php 

/**
 * $this is reference to a PHP Object that was created by the interpreter for you,
 * that contains an array of variables.
 * 
 * The pseudo-variable $this is available when a method is called from within an object context. 
 * $this is the value of the calling object.
 * 
 * The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing 
 * the declaration with the keywords public, protected or private. 
 * + Class members declared public can be accessed everywhere. 
 * + Members declared protected can be accessed only within the class itself and by inheriting and parent classes. 
 * + Members declared as private may only be accessed by the class that defines the member. 
 */

 //Class A
class Person{

    Const AVG_LIFE_SPAN = 80;

    protected $firstName; 
    protected $lastName; 
    protected $yearBorn; 

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

    protected function getFullName(){
        echo "Person -> getFullName()".PHP_EOL; 
        return $this->firstName." ".$this->lastName.PHP_EOL; 
    }
}

//Class B 
class Author extends Person{
    protected $penName = "Mark Twain";

    protected function getPenName(){
        return $this -> penName.PHP_EOL; 
    }

    public function getFullName(){
        echo "Author -> getFullName()".PHP_EOL; 
        return $this->firstName." ".$this->lastName.PHP_EOL; 
    }

}

$myPersonObj = new Person("Davide", "Fella", "1987"); 
//echo $myPersonObj::AVG_LIFE_SPAN; //--> PRINT THE CONST 

//$myPersonObj -> setFirstName("Sam"); 

//echo $myPersonObj -> getFullName();

$myAuthor = new Author("Author name", "Author lastname", 1990);  
echo $myAuthor -> getFullName();




