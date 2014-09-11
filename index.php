<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/8/14
 * Time: 12:16 PM
 */

require_once 'model.php';

$posts = get_all_posts();

// Include the HTML presentation code.
require 'templates/list.php';
