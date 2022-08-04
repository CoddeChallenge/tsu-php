<?php 
	spl_autoload_register(function ($class){
		if(file_exists('controllers/index/'.$class.'.php')){
			require_once 'controllers/index/'.$class.'.php';
		}
	});

	class App{
		public function __construct(){
			$url = isset($_GET['url']) ? $_GET['url']: null;
			$url = rtrim($url, '/');
			$url = explode('/',$url);

			if(empty($url[0])){
				$arquivoController = 'controllers/index/home.php';
				require_once $arquivoController;
				$controller = new Home();
				$controller->loadModel('home');
				$controller->render();
				return false;
			}

			if(!strcmp($url[0], 'home')){
				$arquivoController = 'controllers/index/'.$url[0].'.php';
			}
			

			if(file_exists($arquivoController)){
				require $arquivoController;
				$controller = new $url[0];
				$controller->loadModel($url[0]);
				
	            $nparam = sizeof($url);
	            if($nparam > 1){
	                // apenas o método é chamado
	                $controller->{$url[1]}();
	            }else{
	                // se um controlador for chamado
	                $controller->render();  
	            }

			}else{
				$controller = new Erro();
			}
		
		}
	}
?>