<?php 

include 'author.php';
include_once 'person.php'; //include without the error!

/**
 * If a class to be included is missing, php will execute the program. 
 * But require, instead, throws an error
 */

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

//$myPersonObj = new Person("Davide", "Fella", "1987"); 
//echo $myPersonObj::AVG_LIFE_SPAN; //--> PRINT THE CONST 

//$myPersonObj -> setFirstName("Sam"); 

//echo $myPersonObj -> getFullName();

//$myAuthor = new Author("Author name", "Author lastname", 1990);  
//echo $myAuthor -> getFullName();

echo Author::getCenturyAuthorWasPopular(); 




