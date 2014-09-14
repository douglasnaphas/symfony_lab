<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/13/14
 * Time: 6:31 PM
 */

function list_action(){
	$posts = get_all_posts();
	require 'templates/list.php';
}

function show_action(){
	$post = get_post_by_id($_GET['id']);
	require 'templates/show.php';
}