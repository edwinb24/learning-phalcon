<?php

class IndexController extends \Phalcon\Mvc\Controller
{
	public function indexAction()
	{
		echo "Hello World";
		//The controller renders out view objects, no strings so return "Hello World" wont work
	}
}
