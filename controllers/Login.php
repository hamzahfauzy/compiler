<?php
namespace controllers;
use libs\Controller;
use libs\Session;

class Login extends Controller {

	function __construct(){
		parent::__construct();
		Session::init();
		if(Session::get("username"))
			$this->redirect();
		$this->view->title = "Login";
	}

	function actionIndex(){
		if($this->request("POST")){
			extract($_POST);
			if($username=="admin" && $password=="admin"){
				Session::set("username",$username);
				$this->redirect();
			}
		}
		return $this->view->render("index",1);
	}

}