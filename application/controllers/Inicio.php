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
	public function nuevochoferht()
	{
		$this->load->view('nuevochofer.php');
	}
	public function nuevochofer2()
	{
		$this->load->view('nuevochofer2.php');
	}
	public function nuevochofer2d()
	{
		$this->load->view('nuevochofer2de.php');
	}
	public function verchoferr()
	{
		$this->load->view('verchoferr');
	}
	public function nuevochofer()
	{
		$this->load->view('nuevochofer');
	}
	public function choferdform()
	{
		$this->load->view('choferdform');
	}
}
