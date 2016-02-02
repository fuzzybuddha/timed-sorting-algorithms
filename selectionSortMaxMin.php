<?php

$arr = array();
for($i=0; $i<100; $i++){
	$arr[]=mt_rand(1,10000);
}
$start_time = microtime(true);
function selectionSort($array){
	$min_idx=0;
	$max_idx=0;
	for($i=0;$i<count($array);$i++){
		for($j=$i;$j<count($array)-$i;$j++){
			if($array[$j]<$array[$i]){
				$temp = $array[$j];
				$array[$j] = $array[$i];
				$array[$i] = $temp;
			}
			if($array[$j]>$array[count($array)-$i-1]){
				$temp = $array[$j];
				$array[$j] = $array[count($array)-$i-1];
				$array[count($array)-$i-1] = $temp;
			}
		}
	}
	return $array;
}
$stop_time = microtime(true);
echo "time took: ".($stop_time-$start_time)." seconds.";
echo var_dump(selectionSort($arr));

?>