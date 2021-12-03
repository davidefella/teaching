<!-- BUBBLE SORT  -->
<?php
function bubble_sort($my_array )
{   
    $scambio = true; 

	while( $scambio )
	{   
         
		$scambio = false;
		for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
		{
			if( $my_array[$i] > $my_array[$i + 1] )
			{   

                $tmp = $my_array[$i]; 
                $my_array[$i] = $my_array[$i + 1]; 
                $my_array[$i + 1] = $tmp; 

				$scambio = true;
			}
		}
	}
	
return $my_array;
}
 $test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array\n:";
echo implode(', ',bubble_sort($test_array)). PHP_EOL;
?>


<!-- SELECTION SORT  -->
<?php

function selection_sort($data)
{
for($i=0; $i<count($data)-1; $i++) {
	$min = $i;
	for($j=$i+1; $j<count($data); $j++) {
		if ($data[$j]<$data[$min]) {
			$min = $j;
		}
	}
    $data = swap_positions($data, $i, $min);
}
return $data;
}

function swap_positions($data1, $left, $right) {
	$backup_old_data_right_value = $data1[$right];
	$data1[$right] = $data1[$left];
	$data1[$left] = $backup_old_data_right_value;
	return $data1;
}
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Array originale:\n";
echo implode(', ',$my_array );
echo "\n Array ordinato :\n";
echo implode(', ',selection_sort($my_array)). PHP_EOL;
?>

<!-- INSERTION SORT  -->

<?php

 function insertion_Sort($my_array)
{
	for($i=0;$i<count($my_array);$i++){
		$val = $my_array[$i];
		$j = $i-1;
		while($j>=0 && $my_array[$j] > $val){
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
return $my_array;
}
$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array :\n";
print_r(insertion_Sort($test_array));
?>