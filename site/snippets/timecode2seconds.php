<?php


if(isset($timecode)){

	$temp = explode(":", $timecode);
	$secondes = intVal($temp[0])*3600 + intVal($temp[1])*60 + intVal($temp[2]) + intVal($temp[3]) * 1/25;

	echo $secondes;
}

?>