<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/8/14
 * Time: 12:16 PM
 */

// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

$URI_BASE = '/symfony_lab/';

// route the request internally
$uri = $_SERVER['SCRIPT_NAME'] . $_SERVER['PATH_INFO'];
if($URI_BASE . 'index.php' == $uri){
	list_action();
} elseif ($URI_BASE .'index.php/show' == $uri && isset($_GET['id'])){
	show_action($_GET['id']);
} else {
	header('HTTP/1.1 404 Not Found');
	echo "<html><body><h1>Page Not Found: $uri</h1></body></html>";
}