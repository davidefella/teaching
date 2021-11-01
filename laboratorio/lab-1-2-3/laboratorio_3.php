<?php 

    /**
     * Nota sulla soluzione, qui $tmp_array non serviva, poteva essere fatto tutto con un solo ciclo ma per imparare a lavorare 
     * con i cicli abbiamo allungato un po' la soluzione
     */
    $tmp_array = array();

    foreach ($_POST as $k => $v) {
        $tmp_array[] = $v; // Non mi prendo la chiave, mi interessa solo il valore e l'indice numerico viene dato automaticamente dal PHP
    }
   
    rsort($tmp_array);
       
    for($i=0; $i<count($tmp_array); $i++){
        if( is_even($i)){      
            stampa_elemento_con_tag(stampa_reverso($tmp_array[$i]) ? strrev( strtoupper($tmp_array[$i])) : strtoupper($tmp_array[$i])); 
        } else { 
            stampa_elemento_con_tag(stampa_reverso($tmp_array[$i]) ? strrev( strtolower($tmp_array[$i])) : strtolower($tmp_array[$i])); 
        } 

    }
 
    /* Funzione che mi torna True se numero è pari. La funzione qui è più per scopo didattico per far vedere come usare 
    * operatore ternario. 
    */
    function is_even($numero){
        if ( ($numero % 2) == 0) {
            return True; 
        } else {
            return False;
        }

        //If statment ternario, equivalente al precedente (più compatto): 
        return  ($numero % 2) == 0 ? True : False; 
    }

    //Se l’elemento dell’array contiene la ‘@’ oppure ha più di 5 lettere, stamparla al contrario
    function stampa_reverso($elemento){
        return ( strpos($elemento, '@') || strlen($elemento)>5); 
    }

    function stampa_elemento_con_tag($valore){
        echo "<pre>\n";
        echo $valore;
        echo "</pre>\n";
    }

?>