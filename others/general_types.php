<?php 
    /*
    Comments
    */

    # comments

    #PHP IS CASE SENSITIVE FOR VARIABLES (Not class and functions) 
?>

<?php 
    $regInt = 1234; 
    $hexNum = 0xABC;
    $binaryNum = 0b1000;

    $string_test = "hello!";

    /*
    var_dump(mixed $value) - Dumps information about a variable. 
    */
    var_dump($string_test,$binaryNum); 

    $float = 1.234; 
    $scientific = 0.1234E4;
    var_dump($scientific); 

    $scientific = 1234E-4;
    var_dump($scientific);
?>

<?php 
    $bool = true; 
    var_dump($bool);

    #Can convert any variabile in boolean to check if it's empy, for example
    $assigned_variable = "0"; //0 IS FALSE :) 
    var_dump((bool) $assigned_variable);
?>

<?php 

    #UPPER CASE IS A CONVENTION
    /* Constant is a global define value, if I try to define another constant with same name 
    I'll get an error (obs)*/
    define('NEW_CONSTANT', 'Hello world!'); 

    echo NEW_CONSTANT; //with $ it print empty

    var_dump(NEW_CONSTANT); //print the type and value of the constant 
?>


<?php 
    $intVar = 1234; 
    $stringVar = "I'm a String"; 
    $boolVar = false; 
    $floatVar = 12.34; 

    echo is_int($intVar); 
    echo is_int($stringVar); 
    echo is_int($boolVar); 
    echo is_int($floatVar);
    
    /**
     * NOTE: in PHP 1 is equal to 'true' so in the prev statment, only the first return something. 
     * Other print return nothing (empty)
     * 
     * --> is_bool, is_float ect ect
     */
     
     /*
     * Check if a constant is already defined
     */
     echo defined('NEW_CONSTANT'); 
?>