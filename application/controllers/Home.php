<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * 
	 * Maps URL
	 * 	./home
	 * 	./home/index
	 */
	public function index()
	{
		$data = array(
			'title_page' => 'Home'
		);

		$this->load->view('templates/header', $data);
		$this->load->view('home');
		$this->load->view('templates/footer');

	}

}