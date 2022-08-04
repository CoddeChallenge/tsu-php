<?php 
	class View{
		public function __construct(){}

		function render($nome){
			require 'views/'.$nome.'.php';
		}
	}

?>