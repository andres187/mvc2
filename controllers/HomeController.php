<?php
	class HomeController
	{
		public function indexAction()
		{
			//return ['title' => 'Hola'];
			//return "En construccion";
			return new View('home', ['title' => 'Futbol by efrain']);
		}
	}
?>