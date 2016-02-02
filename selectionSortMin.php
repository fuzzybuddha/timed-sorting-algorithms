<?php

$arr = array();
for($i=0; $i<100; $i++){
	$arr[]=mt_rand(1,10000);
}
$start_time = microtime(true);
function selectionSort($array){
	for($i=0;$i<count($array);$i++){
		for($j=$i;$j<count($array);$j++){
			if($array[$j]<$array[$i]){
				$temp = $array[$j];
				$array[$j] = $array[$i];
				$array[$i] = $temp;
			}
		}
	}
	return $array;
}

$stop_time = microtime(true);
echo "time took: ".($stop_time-$start_time)." seconds.";
echo var_dump(selectionSort($arr));

?>