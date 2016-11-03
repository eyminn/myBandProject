<?php 
	// if ($page_nr = 1) {
	// 	$startItem = ITEMS_PER_PAGE * $page_nr;
	// }else{
	// 	$startItem = ITEMS_PER_PAGE * $page_nr;
	// }
	if(empty($_GET['page_nr'])){
	$_GET['page_nr'] = 1;
	$ding = 1;
	}else{
	$ding = $_GET['page_nr'];
	}
	$itemsperpage = ITEMS_PER_PAGE;
	$startItem = ($ding-1) * $itemsperpage;

	$sql = "SELECT * FROM newsarticles ORDER BY id ASC LIMIT ".$startItem.",  ".$itemsperpage." ";
	$newsresult = $mysqli->query($sql);
	$result = e($newsresult);




 ?>