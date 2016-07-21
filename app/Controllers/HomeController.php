<?php

namespace PPapp\Controllers;

use PPapp\Models\User;
use Slim\Views\Twig as View;


class HomeController extends Controller
{	
	public function index($request, $response)
	{		
		$user = User::find(1);		
		return $this->view->render($response, 'home.twig');
	}
}