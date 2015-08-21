<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
*todo 컨트롤러
*/

class Main extends CI_Controller {

	public function index()
	{
		$this->front();
	}

	public function front()
	{	

		$this->load->view('inc/header');
		$this->load->view('inc/aside');
		$this->load->view('main/main');
		$this->load->view('inc/footer');
	}
}

/* End of file welcome.php 
/* Location: ./application/controllers/welcome.php */