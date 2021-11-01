<?php
    
    $new_array = []; 

    foreach ($_POST as $value) {
        //echo "<pre>\n";
        //echo $value.PHP_EOL;
        //echo "</pre>\n";
        array_push($new_array, $value); 
      }

    
    rsort($new_array); 



    print_r($new_array);
    

    foreach ($new_array as $value) {
        echo "<pre>\n";
        echo $value.PHP_EOL;
        echo "</pre>\n"; 
    }



























/*




    for ($i = 0; $i < count($new_array); $i++) {
        echo "<pre>\n";

        if($i % 2 == 0){
            //echo strtoupper($new_array[$i]); 
        }
        else{
            //echo strtolower($new_array[$i]);
        }

        echo "</pre>\n"; 
    }


    for ($i = 0; $i < count($new_array); $i++) {
        echo "<pre>\n";

        //echo strpos($new_array[$i], '@'); 
        if( (strpos($new_array[$i], '@') && (strlen($new_array[$i]) > 5)  ))  {
            //echo strrev($new_array[$i]); 
        } 
        else {
            echo $new_array[$i]; 
        }
             
      
    }





    
    echo "<pre>\n";
    print_r($_POST);
    echo "</pre>\n";
    exit;

    */

?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>thanks</title>
	</head>

	<body>
        Thank you for submitting!
	</body>
</html>