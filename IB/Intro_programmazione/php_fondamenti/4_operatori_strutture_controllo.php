<?php 

/**
 * Operatori e strutture di controllo consento di controllare il flusso di esecuzione di un programma. 
 * 
 * Operatori aritmetici: 
 *   +  (somma di valori) 
 *   -  (sottrazione di valori)
 *   *  (moltiplicazione)
 *   /  (divisione)
 *   ** (esponenziale)
 *   % (modulo)
 * 
 * 
 * Operatori logici
 *   AND    $x and $y --> True se entrambi gli operandi sono veri 
 *   &&     $x and $y --> True se entrambi gli operandi sono veri
 * 
 *   OR     $x or $y  --> True se uno dei due operandi è vero 
 *   ||     $x or $y  --> True se uno dei due operandi è vero 
 * 
 *   !      !$x --> True se $x è False (operatore di negazione)
 * 
 * 
 * Operatori di comparazione 
 *   ==     operatore di uguaglianza        $x == $y -> True se entrambi gli operandi sono uguali tra loro
 *   !=     operatore di non uguaglianza    $x != $y -> True se gli operandi non sono uguali tra loro 
 *   <      operatore di minore             $x < $y  -> True se $x è minore di $y
 *   <=     operatore di minore o uguale    $x <= $y -> True se $x è minore di $y
 *   >      operatore di maggiore           $x > $y  -> True se $x è maggiore di $y
 *   >=     operatore di maggiore o uguale  $x > $y  -> True se $x è maggiore di $y
 * 
 * 
 */

 /**
  * I loop in PHP vengono utilizzati per eseguire lo stesso blocco di codice un numero specificato di volte. 
  * PHP supporta i seguenti quattro tipi di loop.
  */

  $array_da_iterare = array(
    "chiave_1" => "valore_1",
    "chiave_2" => "valore_2", 
    "chiave_3" => "valore_3");
  
  //Voglio accedere alle chiavi - soluzione 1
  foreach(array_keys($array_da_iterare) as $key){
    echo $key; 
  }
  
  //Voglio accedere alle chiavi (e valori) - soluzione 2
  foreach( $array_da_iterare as $chiave => $valore){
    echo $chiave;
    echo $valore; 
  }

  //Voglio accedere agli elementi (valori) dell'array
  foreach($array_da_iterare as $array_element){
    echo $array_element; 
  }

  $array_da_iterare_solo_valori = array("valore_1", "valore_2", "valore_3");
  for($i=0; $i<count($array_da_iterare_solo_valori); $i++){
    echo $array_da_iterare_solo_valori[$i]; 
  }

  $i = 0; 
  while($i < count($array_da_iterare_solo_valori)){
    echo $array_da_iterare_solo_valori[$i]; 
    $i++; 
  }

?>