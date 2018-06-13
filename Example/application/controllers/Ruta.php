<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('ruta/index');	
	}

}

/* End of file ruta.php */
/* Location: ./application/controllers/ruta.php */