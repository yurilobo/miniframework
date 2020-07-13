<?php
namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

	public function index(){ 

		$this->view->dados=array('Sofá','Cadeira',"Cama");
		$this->render('index','layout3');
		
	}
	public function sobreNos(){

		$this->view->dados=array("Notebook","Smartphone");
		$this->render('sobreNos','layout2');
	}	
}

?>