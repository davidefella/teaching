<?php
/**
* FUNZIONI 
* 
* Le funzioni sono un blocco di codice che esegue un'attività specifica utilizzabile in tutto il programma. Possiamo avere funzioni
* "custom" definite dal programmatore oppure possiamo utilizzare quelle messe a disposizione dal linguaggio.
* 
* Il return ci darà in outuput il valore che vogliamo dalla funzione. 
* 
* Esempio di funzione PHP e come invocarla
*/
function somma_valori($numero1, $numero2)
{
	return($numero1 + $numero2);
}
echo somma_valori(4,5); //9

/**
* Le variabili e costanti dichiarate all'interno della funzione hanno una visibilità locale alla funzione, vuol dire che non sono 
* utilizzabili al di fuori di essa (è possibile comunque fare una "promozione" di una variabile locale a variabile globale)
*/
$variabile_globale = "valore utilizzabile ovunque nel codice"; 
function funzione_prova_global(){
    global $variabile_globale; //con "global" sto indicando al codice che voglio usare la variabile dichiarata fuori dalla funzione
    echo $variabile_globale; 
}

function nuova_funzione_prova_global(){
    global $variabile_globale; 
    $variabile_globale = "nuovo valore"; //sovrascrivo il vecchio valore
    echo $variabile_globale; 
}

//Esempio di funzione dichiarata localmente
function funzione_prova_local(){
    $variabile_locale_alla_funzione = "Valore utilizzabile solo qui dentro";
    echo $variabile_locale_alla_funzione; 
}
//echo $variabile_locale_alla_funzione; //Qui avrete un errore, perché non è un variabile utilizzabile fuori dalla funzione
?>
