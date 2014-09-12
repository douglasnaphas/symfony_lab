<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/11/14
 * Time: 10:36 PM
 */

require_once 'model.php';

$post = get_post_by_id($_GET['id']);

require 'templates/show.php';