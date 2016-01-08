<?php

class LoginController extends \Phalcon\Mvc\Controller
{
	public function initialize()
	{
		echo "**INIT**";
	}
	
	public function indexAction()
	{
		echo "Login!";
	}
	
	/*
	In the URL you can select the specific action to be excecuted
	if it is different than the index one by addind the action name
	to the URL. Also you can pass paramenters to the URL by adding
	the parameters to be pass with a / in between them in the right
	order such as =>	<server name>/<controller name>/<Action name>/<1st variable>
	/<2nd variable>
	*/
	
	public function processAction($username = false, $age = 12)
	{
		echo "Processing";
		echo $username;
		echo $age;
		
		$this->dispatcher->forward([
		'controller' => 'login',
		'action' => 'test'
		]);
		//This forward the controller to testAction 
	}
	
	public function testAction()
	{	
		echo "--TEST ACTION --";
	}
}
