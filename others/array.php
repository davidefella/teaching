<?php 
    /**
     * Array --> Contains Collection of types + any type 
     *           Each values has related key
     * 
     * print_r --> Prints human-readable information about a variable
     */

     //Indexed
     $authors = array("Davide F", "Marco G", "Piero R", "Simone N"); 
     #print_r($authors); 

     //Indexed
     $books = ["aaa", "bbb", "ccc", "ddd", "eee"]; 
     #print_r($books); 
     

     //NOTA, C avrà indice 0, ma se prima avrò un intero, allora sarà intero+1
     //associative
     $authors = array("A" => "A_print", "B" => "B_print", 9 => "D"); 
     //print_r($authors); 

     //echo $authors[5];
     
     //echo array_key_exists(8, $authors); 

     //echo in_array("B_print", $authors); 


     //array_push --> ONLY INDEX ARRAY
     $authors = array(); 
     array_push($authors, "Element 1"); 
     array_push($authors, "Element 2"); 
     array_push($authors, "Element 3"); 
     array_push($authors, "Element 4"); 

     echo print_r($authors); 

     //$authors[] = "Element 3"; 
     print_r($authors); 

     $authors_2["ciao"] = "Element 43"; 
     print_r($authors_2);

     //REMOVE 
     //array_pop --> Remove the last element
     $lastValue = array_pop($authors); 
     echo $lastValue; 
     echo print_r($authors); //--> Can see the array structure

     unset($authors[1]); // --> UNSET LEAVES HOLE IN INDEXES
     echo print_r($authors); 
     array_push($authors, "Element 5");
     echo print_r($authors);

     $associative_array = array("Q" =>"Q_element", "D" => "D_element", "F" => "F_element", "A" => "A_element"); 
     unset($associative_array["B"]);
     echo print_r($associative_array);

     //sort($associative_array); //--> SORT FOR ARRAY, preserve the values but not the key!
     //echo print_r($associative_array);

     //with asort --> preserve order keys
     asort($associative_array); //--> BETTER FOR ASSOCIATIVE ARRAY
     //echo print_r($associative_array);

     //ksort --> order for keys

     echo count($associative_array, 1); 
     echo count($associative_array, COUNT_RECURSIVE); 


     //FOR EACH LOOP - key printing
     foreach($associative_array as $key => $val){
        echo $val." (".$key.")\n"; 
     }

     $multimensional_array = array( "Lev 1" => array( 
                                        "Lev 1-1" => array("Lev 1-1-1", "Lev 1-1-2", "Lev 1-1-3")), 
                                    "Lev 2" => array( 
                                        "Lev 2-2" => array("Lev 2-2-1", "Lev 2-2-2", "Lev 2-2-2"))); 

    //echo print_r($multimensional_array); 

    echo print_r($multimensional_array["Lev 1"]["Lev 1-1"]);


     ?>
