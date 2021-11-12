<?php
$player = [
    "player" => "Cristiano Ronaldo",
    "age" => 34,
    "statistics" => [
        "matches" => 989,
        "goals" => 712,
        "assists" => 219
    ]
];

$json = json_encode($player);

#var_dump($json);

file_put_contents('player.json', $json);

$file = file_get_contents('player.json');

#echo $file
?>


<!-- Esempio di stampa in una tabella HTML -->
<?php
$file = file_get_contents("users.json");
$users = json_decode($file);

?>
<table>
    <tbody>
        <?php foreach ($users as $user):?>
        <tr>
            <td><?php echo $user->name?></td>
            <td><?php echo $user->surname?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
<table>



<?php
//Esempio con la classe StdClass
$json = '{ "foo": "bar", "number": 42 }';
$stdInstance = json_decode($json);

echo $stdInstance->foo . PHP_EOL; //"bar"
echo $stdInstance->number . PHP_EOL; //42

//Example with associative array
$array = json_decode($json, true);
echo $array['foo'] . PHP_EOL; //"bar"
echo $array['number'] . PHP_EOL; //42 
?>