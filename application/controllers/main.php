<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		//메인
		$this->load->view('main/main'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */