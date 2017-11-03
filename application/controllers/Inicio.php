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
	public function verchoferr($coda,$nome)
	{
		$data = array(
        'elsaludo' => $coda,
				'elsaludos' => $nome,
		);
		$this->load->view('verchoferr',$data);
	}
	public function nuevochofer()
	{
		$this->load->view('nuevochofer');
	}
	public function choferdform()
	{
		$this->load->view('choferdform');
	}
	public function viajesvirtual()
	{
		$this->load->view('viajesvirtual');
	}
	public function controlar($code,$nome)
	{
		$data = array(
        'elsaludo' => $code,
				'elsaludos' => $nome,
		);
		$this->load->view('controlar',$data);
	}
	public function nuevopasajero()
	{
		$this->load->view('nuevopasajero');
	}
	public function adicionpasajero()
	{
		$this->load->view('adicionpasajero');
	}

}
