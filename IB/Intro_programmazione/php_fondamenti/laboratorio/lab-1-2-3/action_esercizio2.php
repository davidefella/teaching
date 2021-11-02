<?php
    /**
    * Inserire il contenuto dell’array $_POST in un secondo array temporaneo chiamato “tmp_array”
    * Ordinare in ordine decrescente il contenuto dell’array “tmp_array” e stamparlo 
    */
    $tmp_array = array(); 

    //SOLUZIONE 1 - Faccio riferimento solo ai valori ed ignoro le chiavi
    foreach ($_POST as $k => $v) {
        /*Nota, ad ogni iterazione aggiungo solo il valore $v dell'array $_POST, mi perdo le chiavi. 
        * Se volessi salvare/accedere alle chiavi potrei scrivere $tmp_array[] = $k;
        */
        $tmp_array[] = $v; 
    }
    rsort($tmp_array); 
    print_r($tmp_array);
    
    //SOLUZIONE 2 - Copio l'intera struttura di $_POST
    foreach ($_POST as $element) {
        $tmp_array[] = $element;
    }
    rsort($tmp_array); ?>
