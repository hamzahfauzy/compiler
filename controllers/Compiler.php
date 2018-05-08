<?php
namespace controllers;
use libs\Controller;
use models\Bahasa_Model;

class Compiler extends Controller {

	function __construct(){
		parent::__construct();
		$this->view->title = "Compiler";
	}

	function actionIndex(){
		$model = new Bahasa_Model;
		$output = "";
		if($this->request("POST")){
			extract($_POST);
			$model->find()->where(["bahasaID"=>$bahasa])->one();
			putenv($model->path_environment);
			$dir = "code";
			chdir($dir);
			file_put_contents("$filename.".$model->extension, $kode);
			$compile_method = str_replace("{filename}", "$filename", $model->compile_method);
			$compile = shell_exec($compile_method);
			$pascal_compiler_output = "Free Pascal Compiler version 2.6.2-8 [2014/01/22] for i386
				Copyright (c) 1993-2012 by Florian Klaempfl and others
				Target OS: Linux for i386
				Compiling $filename.pas
				Linking $filename
				/usr/bin/ld.bfd: warning: link.res contains output sections; did you forget -T?
				3 lines compiled, 0.0 sec 
				";
			if(!empty($compile) && strncmp($compile,$pascal_compiler_output,count($pascal_compiler_output)) != 0){
				chdir("../");
				return $this->view->render("compile-error",1,["error"=>$compile]);
			}
			$run = str_replace("{filename}", $filename, $model->run_method);
			if(!empty($test_input)){
				file_put_contents("$filename.in", $test_input);
				$output = shell_exec($run." < $filename.in");
			}
			else
				$output = shell_exec($run);
			$output = rtrim($output);
			chdir("../");
			return $this->view->render("compiler-output",1,["output"=>$output]);
		}
		$model->find()->execute();
		return $this->view->render("index",1,["model"=>$model,"output"=>$output]);
	}
}