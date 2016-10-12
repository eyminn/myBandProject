<?php 

function Content($data){

	while ($result = $data->fetch_assoc() ) {
		$array[] = $result;

	}
	return $array;
}
function ContentAbout($data2){

	while ($result2 = $data2->fetch_assoc() ) {
		$array2[] = $result2;
	}
	return $array2;
}
function Menu($data3){

	while ($result3 = $data3->fetch_assoc() ) {
		$array3[] = $result3;
	}
	return $array3;
}


 ?>