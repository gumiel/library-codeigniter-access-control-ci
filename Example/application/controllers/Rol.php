<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('rol/index');
	}

}

/* End of file rol.php */
/* Location: ./application/controllers/rol.php */