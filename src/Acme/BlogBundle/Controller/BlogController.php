<?php
/**
 * Created by PhpStorm.
 * User: dnaphas
 * Date: 9/13/14
 * Time: 6:31 PM
 */
namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
	public function listAction()
	{
		$posts = $this->get('doctrine')
			->getManager()
			->createQuery('SELECT p FROM AcmeBlogBundle:Post p')
			->execute();
	}


}