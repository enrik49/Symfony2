<?php

namespace Unidad3\EjercicosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Unidad3EjercicosBundle:Default:index.html.twig', array('name' => $name));
    }


	public function nFuncAction(){
		$response = new Response();
		$response->setContent('<html><body><h1>Hola caracola!</h1></body></html>');
		return $response;
	}
}
