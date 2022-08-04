<?php 
	class Controller{
		public function __construct(){
			$this->view = new View();
		}

		function loadModel($model){
			$url = 'models/'.$model.'model.php';

			if(file_exists($url)){
				require $url;

				$modelNome = $model.'Model';
				$this->model = new $modelNome();
			}
		}
	}

?>