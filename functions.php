<?php 
    /**
     * 
     * Function --> Block of code that perform a specific task and use it throughout the program
     * 
     * ORDERS DOES NOT MATTER
     */

    //NO return type (Weakly typed language) 
    function booksByAuthorYear($authorName, $year){
        echo $year; 
        echo "\n"; 
        echo $authorName; 
        echo "\n"; 
        
    }
    $authorName = "Asimov"; 
    $year = 2000; 
    booksByAuthorYear($authorName, $year);

    #With default values 
    function booksByAuthorYearByDefault($authorName, $year=2000){
        echo $year; 
        echo "\n"; 
        echo $authorName; 
        echo "\n"; 
    }
    booksByAuthorYearByDefault($authorName); 

    #VARIABLE FUNCTIONS
    function getAuthor(){
        echo "Charles Dickens"; 
        echo "\n";
    }
    $author = "getAuthor";
    $author();


    #VARIABLE SCOPE - If variabile is declared inside the function I can't see it
    $authorName = "Carlo Manzoni"; 
    function setAuthorName(){
        global $authorName; 
        $authorName = "William Shakespeare"; 
        $test = "test";
    }
    setAuthorName(); 
    echo $authorName; 
    echo $test; //Nothing printed

    #global --> It's like a variable promotion








?>