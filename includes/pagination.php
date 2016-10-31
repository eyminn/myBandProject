<?php 
	if ($page_nr = 1) {
		$startItem = ITEMS_PER_PAGE * $page_nr;
	}else{
		$startItem = ITEMS_PER_PAGE * $page_nr + 1;
	}

	$sql = "SELECT * FROM newsarticles LIMIT ".$startItem.",  ".ITEMS_PER_PAGE." ";
	$newsresult = $mysqli->query($sql);
	$result = Content($newsresult);




 ?>