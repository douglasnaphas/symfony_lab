<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/8/14
 * Time: 12:16 PM
 */

$mysqli = new mysqli( 'localhost', 'symf', 'symfony_pw', 'blog_db' );
$result = $mysqli->query( "SELECT id, title FROM post" );

$posts = array();
while( $row = $result->fetch_assoc() ){
	$posts[] = $row;
}

$mysqli->close();

// Include the HTML presentation code.
require 'templates/list.php';
