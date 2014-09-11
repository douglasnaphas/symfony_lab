<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/9/14
 * Time: 10:03 PM
 */


/**
 * @return mysqli A database link.
 */
function open_database_connection(){
	return new mysqli( 'localhost', 'symf', 'symfony_pw', 'blog_db' );

}

function close_database_connection( $link ){
	mysqli_close( $link );
}

function get_all_posts(){
	$link = open_database_connection();

	$result = mysqli_query( $link, 'SELECT id, title FROM post' );
	$posts = array();
	while( $row = mysqli_fetch_assoc( $result ) ){
		$posts[] = $row;
	}
	close_database_connection( $link );

	return $posts;
}