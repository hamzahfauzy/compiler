<?php
namespace controllers;

use libs\Controller;
use libs\Session;

class Index extends Controller {

	function __construct(){
		parent::__construct();
		Session::init();
	}

	function actionIndex(){
		$this->view->title = "Index";
		return $this->view->render("index",1);
	}

	function actionTentang(){
		$this->view->title = "Tentang Aplikasi Programming Competition";
		return $this->view->render("tentang",1);
	}

	function actionLogout(){
		Session::destroy();
		$this->redirect();
	}
	

}