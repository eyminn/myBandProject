<?php 

function e($eData){

	while ($resultevents = $eData->fetch_assoc() ){
		$arrayE[] = $resultevents;
	}
	return $arrayE;
}

 ?>