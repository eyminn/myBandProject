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
$templateParser->assign('title', 'Me First And The Gimme Gimmes');

include('model/select_newsarticles.php');
// Display template: output html
$templateParser->display('head.tpl');
$templateParser->assign('result3', $result3);



// Get newsarticles from database

$action = $_GET['action'];

switch ($action) {
	case 'home':
			$templateParser->display('header.tpl');
			$templateParser->assign('result', $result);
			$templateParser->display('newsarticle.tpl');
		break;
	case 'about':
			$templateParser->display('headerabout.tpl');
			$templateParser->assign('result2', $result2);
			$templateParser->display('about.tpl');

		break;
	default:
			$templateParser->display('header.tpl');
			$templateParser->assign('result', $result);
			$templateParser->display('newsarticle.tpl');
		break;
}
$footerText = 'School opdracht';
// Show newsarticles 'old style' => refactor to template system


$templateParser->assign('footerString', 'school Opdracht');
$templateParser->display('footer.tpl');