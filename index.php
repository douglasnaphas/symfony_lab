<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/8/14
 * Time: 12:16 PM
 */

// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php'

// route the request internally
$uri = $_SERVER['REQUEST_URI'];
if('index.php' == $uri){
	list_action();
}
$posts = get_all_posts();

// Include the HTML presentation code.
require 'templates/list.php';
