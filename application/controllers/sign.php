<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
*todo 컨트롤러
*/

class Sign extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('sign_m');
		$this->load->helper('url');
	}

	function signwrite()
	{
		if($_POST){

			$name = $this->input->post('username',TRUE);
			$info = $this->input->post('info_num',TRUE);
			$address = $this->input->post('address',TRUE);
			$this->sign_m->insertsign($name,$info,$address);

			redirect('sign/signwrite');

			exit;

		}else{
			$this->load->view('inc/header');
			$this->load->view('inc/aside');
			$this->load->view('signature/signature');
			$this->load->view('inc/footer');
		}
	}
}

/* End of file welcome.php 
/* Location: ./application/controllers/welcome.php */