<?php 
    $now = new DateTime();

    #var_dump($now); 


    

        $timestamp = time();
        echo date('l, j F Y', $timestamp);
  

    //echo getDay($now->format('N'));

    function getDay($numerOfTheWeek){
        $dayOfTheWeek = Null; 

        switch ($numerOfTheWeek) {
            case "1":
                $dayOfTheWeek = "Lunedì";
                break;
            case "2":
                $dayOfTheWeek = "Martedì";
                break;
            case "3":
                $dayOfTheWeek = "Mercoledì";
                break;
            case "4":
                $dayOfTheWeek = "Giovedì";
                break;
            case "5":
                $dayOfTheWeek = "Venerdì";
                break;
            case "6":
                $dayOfTheWeek = "Sabato";
                break;
            case "7":
                $dayOfTheWeek = "Domenica";
                break;
            default:
                return "Numero non valido";
            }

            return $dayOfTheWeek; 
    }
?>