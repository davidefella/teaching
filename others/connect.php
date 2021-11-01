<?php 
    $dbPassword = "PHPFundamentals"; 
    $dbUserName = "PHPFundamentals";
    $dbServer = "127.0.0.1"; 
    //$port = "3306"; 
    $dbName = "phpfundamentals"; 
    
    echo "Hello world 2";
    $connection = new mysqli($dbServer,$dbUserName,$dbPassword,$dbName); 
    //phpinfo()
    //print_r($connection); 
    echo "Hello world"; 

    //if connect_error has a value
    //exit terminate the exeution of the script (and print message)
    if($connection->connect_error){
        exit("Database Connection Failed. Reason: ".$connection->connect_error); 
    }

    $sql_insert = "INSERT INTO authors (first_name, last_name, pen_name) VALUES ('Simone', 'Fella', 'simone pen')";

    $sql_select = "SELECT * FROM authors ORDER BY id"; 


    //$query = "DELETE FROM Authors WHERE id = 4"; 

    $connection -> query($sql_select); 

    //print_r ($connection); 

    //echo "Newly created author Id: ".$connection -> insert_id; 

    $resultObj = $connection -> query($sql_select); 
    if($resultObj->num_rows > 0){

        //fetch_assoc return single row
        while($singleRowFromQuery = $resultObj->fetch_assoc()){
            //print_r($singleRowFromQuery);
            echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL; 
        }
        
    }

    //Obj query da chiudere
    $resultObj -> close(); 
    $connection -> close(); 


    //Difference with PDO!!

?>