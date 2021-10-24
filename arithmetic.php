<?php 
    //echo 8 % 3; //--> Modular
    //echo 4 ** 2; //--> Exponential

    $alterByOne = 2; 
    $alterByOne++; 
    echo $alterByOne.PHP_EOL; 

    $usingSameVar = 5; 
    $usingSameVar += 3; 
    echo $usingSameVar.PHP_EOL; 

    $concat = "Davide"; 
    $concat .= "Fella"; 
    echo $concat; 


    /**
     * The operator == casts between two different types if they are different, 
     * while the === operator performs a 'typesafe comparison'. That means that it 
     * will only return true if both operands have the same type and the same value.
     */
    var_dump(8==="8"); 

    var_dump(7 !== "7"); 

    echo 1 <=> 1; //Spaceship operator

    switch(5 <=> 7){
        case 1: 
            echo "Greater than"; 
            break; 
        case 0; 
            echo "Equal"; 
            break; 
        case -1;
            echo "Less than"; 
            break; 
        default: 
            "default option"; 
    }       

    //Condition: condition ? true : false 

    //coalesce condition --> $count ?? else result; 

    /*
    * while(expr){
    *    
    *    expr = true; 
    * }
    */

    /**
     *  for($i=0; $i<5; $i++){
     *      echo "Reading is fun!"
     *  }
     */
?>