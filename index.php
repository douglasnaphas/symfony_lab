<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/8/14
 * Time: 12:16 PM
 */

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$URI_BASE = '/symfony_lab';

$request = Request::createFromGlobals();

$uri = $URI_BASE . $request->getPathInfo();
if('/' == $uri){
	$response = list_action();
} elseif('/show' == $uri && $request->query->has('id')){
	$response = show_action($request->query->get('id'));
} else {
	$html = '<html><body><h1>Page Not Found</h1></body></html>';
	$response = new Response($html, Response::HTTP_NOT_FOUND);
}

// echo the headers and send the response
$response->send();