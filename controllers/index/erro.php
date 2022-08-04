<?php 
	class Erro extends Controller{
		public function __construct(){
			parent::__construct();
			$this->view->msg = "<br/><br/><br/>404";
			$this->view->msg1 = "<br/><br/>Pagina Não Encontrada<br/><br/><br/>";
			$this->view->render('erro/index');
			//echo "<h3>Erro ao carregar essa pagina</h3>";
		}
	}
?>