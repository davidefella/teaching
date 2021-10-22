<?php 
/**
 * NOTE: 
 *  ' ' ---> Variable are not escaped 
 *  " " ---> Variable are escaped 
 */
?>

<?php 
    $currency = 'penny'; 

    $sampleString = "A $currency saved is a $currency earned."; 

    echo $sampleString; 

    //echo "\n";

    //If I print an unkonw variable it will print an empty var 
    $var = 2; 
    echo $var."nd place"; 

?> 

<?php
    echo <<<EOT
    My name is Davide
        - Davide
    EOT;
?>

<?php 
    //echo "Et", " tu", ", ", "Brute", "!"; 
    $quote = "Quote to upper"; 
    $quote = strtoupper($quote); 

    //echo $quote; 
    $length = strlen($quote); 

    //echo $length; 

    $new_quote = "New quote"; 
    //echo strpos($new_quote, "te");

    $quote = "sono una bellissima quote"; 
    $replaced = str_replace("sono", "eri", $quote, $count_replacing); 
    //echo $replaced; 
    //echo $count_replacing; 

    $quote_string = "Stringa che voglio rimpiazzare"; 
    #echo substr($quote_string, 0, -1);

    $quote = "Nuova stringa che voglio sostituire"; 
    $varArray = str_split($quote,8); //array

    print_r($varArray); 


?>



