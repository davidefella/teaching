<?php 
/**
 * Arrays: struttura dati per memorizzare, organizzare e manipolare dati. E' una lista di elementi anche eterogenei tra loro.
 * Nota: le chiavi devono essere o stringhe oppure degli interi. I valori possono essere invece qualsiasi tipo di dato. 
 * 
 * Esempi di dichiarazione:
 */
$array_tmp = array(
    "chiave_1" => "valore_1",
    "chiave_2" => "valore_2"
);

//Oppure in maniera equivalente 
$array_tmp = [
    "chiave_1" => "valore_1",
    "chiave_2" => "valore_2",
];

//Posso omettere le chiavi se sono già numeriche. In questo caso sarà il PHP ad aggiungerle per me partendo da 0. 
$array_tmp = array("valore_1", "valore_2");

//Possiamo avere anche array dichiarati come valori 
$array_tmp = array(
    "chiave_1" => "valore_1",
    "chiave_2" => array("chiave_3" => "valore_3") 
);

//Per aggiungere un elemento ho due modi differenti
$array_tmp["chiave_3"] = "valore_3"; 
$array_tmp[] = "valore_3"; // --> Qui però aggiungerà una chiave pari a 0, perché assegna intero automaticamente. 
var_dump($array_tmp); 


//Per accedere ad un elemento di un arrray: [chiave].
$array_tmp["chiave_1"];

//Se voglio modificare un valore partendo dalla chiave. Nota, se "chiave_1" non è presente, viene aggiunto un nuovo elemento. 
$array_tmp["chiave_1"] = "Nuovo valore";
?>