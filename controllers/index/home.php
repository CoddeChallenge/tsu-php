<?php 
	class Home extends Controller{
		public function __construct(){
			parent::__construct();
		}

		function render(){
			$this->view->dataDiaMes = date('d, M');
			$this->view->dataHora = date('H:i:s');
			$this->view->dataSemana = self::diasSemana();
        	$this->view->render('index/index');
    	}

    	function diasSemana(){
    		$diasemana = array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sabado');
    		$data = date('Y-m-d');
    		$diasemana_numero = date('w', strtotime($data));
    		return $diasemana[$diasemana_numero];
    	}
	}
?>