<?php
	
	class Model
	{
		public $string;
		
		public function_construct(){
			$this->string = "Using PHP in MVC! Inside the model";
		}
	}
	
	class Controller
	{
		private $model;
		
		public function_construct($model){
			$this->model = $model;
		}
		
		public function clicked() {
			$this->model->string = "using the controller to update the view";
		}
	}
	
	class View
	{
		private $model;
		private $controller;
		
		public function_construct($controller, $model){
			$this->controller = $controller;
			$this->model = $model;
		}
		
		public function output() {
			return '<p><a href="mvc.php?action=clicked">'.$this->model->string."</a><p>";
		}
	}	
?>
