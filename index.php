	<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/function.php';
include 'includes/pagination.php';


// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Time 2 Watch');	

include('model/select_newsarticles.php');
// Display template: output html
$templateParser->display('head.tpl');
$templateParser->assign('result3', $result3);


// Get newsarticles from database

$action = isset( $_GET['action'])?$_GET['action']:'home';
$page_nr = isset($_GET['page_nr'])? $_GET['page_nr']=0:$_GET['page_nr'];
switch ($action) {
	case 'HOME':
			$templateParser->display('header.tpl');
			$templateParser->assign('result', $result);
			$templateParser->display('newsarticle.tpl');
		break;
	case 'ABOUT':
			$templateParser->display('headernew.tpl');
			$templateParser->assign('result2', $result2);
			$templateParser->display('about.tpl');

		break;
	case 'EVENTS':
			$templateParser->display('headernew.tpl');
			$templateParser->assign('resultevents', $resultevents);
			$templateParser->assign('resultTableEvents', $resultTableEvents);
			$templateParser->display('new.tpl');
		break;
	case 'CONTACT':
			$templateParser->display('headernew.tpl');
			$templateParser->display('contact.tpl');
		break;
	default:
			$templateParser->display('header.tpl');
			$templateParser->assign('result', $result);
			$templateParser->display('newsarticle.tpl');
		break;
}
// Show newsarticles 'old style' => refactor to template system


$templateParser->assign('footerString', 'school Opdracht');
$templateParser->display('footer.tpl');