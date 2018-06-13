<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	public function index()
	{
			
	}

	public function login()
	{
		$this->load->view('publico/login');
	}

	public function inicio()
	{
		$this->load->view('publico/inicio');
	}

	public function patrocinadores()
	{
		$this->load->view('publico/patrocinadores');
	}

	public function loginProcess()
	{
		$usuario = $this->input->post('usuario');
		
		if( $usuario['cuenta']=='admin' && $usuario['password']=='admin' )
		{
			$this->session->set_userdata('id_usuario', 77846); // la variable de session creada se tiene que configurar en /AccessControlCI/config.php 
			$this->session->set_userdata('cuenta_usuario', $usuario['cuenta']); // la variable de session creada se tiene que configurar en /AccessControlCI/config.php 
			$this->session->set_userdata('tipo_usuario', 'SUPERUSUARIO'); // la variable de session creada se tiene que configurar en /AccessControlCI/config.php 
		}
		redirect('usuario/index','refresh');
	}

	public function cerrar()
	{
		$this->session->unset_userdata('id_usuario');
		$this->session->unset_userdata('cuenta_usuario');
		$this->session->unset_userdata('tipo_usuario');
		redirect('publico/login','refresh');
	}



}

/* End of file Publico.php */
/* Location: ./application/controllers/Publico.php */