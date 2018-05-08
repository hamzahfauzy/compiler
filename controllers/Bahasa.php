<?php
namespace controllers;
use libs\Controller;
use libs\Session;
use models\Bahasa_Model;

class Bahasa extends Controller {

	function __construct(){
		parent::__construct();
		Session::init();
		if(!Session::get("username"))
			$this->redirect();
		$this->view->title = "Bahasa Pemrogaman";
	}

	function actionIndex(){
		$model = new Bahasa_Model;
		$model->find()->execute();
		return $this->view->render("index",1,["model"=>$model]);
	}

	function actionTambah(){
		$model = new Bahasa_Model;
		if($this->request("POST")){
			$model->attr($_POST);
			if($model->save()){
				$this->redirect("bahasa");
			}
		}
		return $this->view->render("form",1,["model"=>$model]);
	}

	function actionEdit($id){
		$model = new Bahasa_Model;
		if($this->request("POST")){
			$model->attr($_POST);
			if($model->save()){
				$this->redirect("bahasa");
			}
		}
		$model->find()->where(["bahasaID"=>$id])->one();
		return $this->view->render("form",1,["model"=>$model]);
	}

	function actionHapus($id){
		$model = new Bahasa_Model;
		$model->delete(["bahasaID"=>$id]);
		$this->redirect("bahasa");
	}

}