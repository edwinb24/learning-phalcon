<?php

class LoginController extends \Phalcon\Mvc\Controller
{
	public function initialize()
	{
		$this->view->setTemplateAfter('default');
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
		//When views are used the echos stop showing up
		echo "Processing";
		echo $username;
		echo $age;
		
		//The following lines are sending the variables to the view
		$this->view->setVar('username', $username);
		$this->view->setVar('age', $age);	
		
		//This line can be use to disable the views
		 //$this->view->disable();
		//This line disable by levels
			$this->view->disableLevel(\Phalcon\Mvc\View::LEVEL_AFTER_TEMPLATE);
		
		
		/*Part of this example
		$this->dispatcher->forward([
		'controller' => 'login',
		'action' => 'test'
		]);
		*/
		//This forward the controller to testAction 
	}
	
	/*Part of this example
	public function testAction()
	{	
		echo "--TEST ACTION --";
	}
	*/
	}
