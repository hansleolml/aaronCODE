<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function verchofer()
	{
		$this->load->view('verchofer');
	}
	public function navegacion()
	{
		$this->load->view('navegacion.php');
	}
	public function inicios()
	{
		$this->load->view('inicio');
	}
}
