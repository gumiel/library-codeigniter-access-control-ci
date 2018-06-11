<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		echo "ESTA ES UNA PAGINA PRIVADA (index).";
	}

	public function lista()
	{
		echo "ESTA ES UNA PAGINA PRIVADA (lista).";
	}

	public function crear()
	{
		echo "ESTA ES UNA PAGINA PRIVADA (crear).";
	}

	public function editar()
	{
		echo "ESTA ES UNA PAGINA PRIVADA (editar).";
	}

	public function eliminar()
	{
		echo "ESTA ES UNA PAGINA PRIVADA (eliminar).";
	}

}

/* End of file Usuario.php */
/* Location: ./application/controllers/Usuario.php */