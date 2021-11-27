<!-- Crea una form per "conto alla rovescia per il compleanno" --> 
<?php
    $target_days = mktime(0,0,0,07,18,2022);
    $today = time();
    $diff_days = ($target_days - $today);
    $days = (int)($diff_days/86400);
    print "Days till next birthday: $days days!"."\n";
?>

<!-- Scrivere uno script PHP per convertire una data da aaaa-mm-gg a gg-mm-aaaa --> 
<?php
    $odate = "2012-09-12";
    $newDate = date("d-m-Y", strtotime($odate));
    echo $newDate."\n";
?>


<?php 
    $input = array("Neo", "Neo", "Neo", "Neo", "Neo");
    $rand_keys = array_rand($input, 5);
    
    foreach ($rand_keys as $value) {
        print "<br>"; 
        print $input [$value]; 
    }


?>

<!-- #7 --> 
<?php
    echo round( 1.65, 1, PHP_ROUND_HALF_UP)."\n";   //  1.7
    echo round( 1.65, 1, PHP_ROUND_HALF_DOWN)."\n"; //  1.6
    echo round(-1.54, 1, PHP_ROUND_HALF_EVEN)."\n"; // -1.5
?>