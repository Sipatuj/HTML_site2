<?php
switch($id){
	case 'services': include 'inc/services.php'; break;
	case 'about': include 'inc/about.inc.php'; break;
	default: include 'inc/works.php';
}	