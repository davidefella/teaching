<?php
$delete_item = 'april';

// lista dei mesi in array
$months = array('jan', 'feb', 'march', 'april', 'may'); // for april, the key is 4
foreach (array_keys($months, $delete_item) as $key) {
    unset($months[$key]);
}

// stampa l'array
var_dump($months);

$json = json_encode($months);

var_dump($json)

?>