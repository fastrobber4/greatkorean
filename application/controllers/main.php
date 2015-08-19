<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
*todo 컨트롤러
*/

class Main extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('todo_m');
		$this->load->helper('url');
	}

	/*주소에서 메서드가 생략되었을때 실행되는 기본 메서드*/
	public function index()
	{
		$this->lists();
	}


	/*todo 목록*/

	public function lists()
	{
		$data['list'] = $this->todo_m->get_list();

		$this->load->view('todo/list_v',$data);
	}


	function view()
	{
		$id = $this->uri->segment(3);

		$data['views'] = $this->todo_m->get_view($id);

		$this->load->view('todo/view_v',$data);
	}



	/*글쓰기 post 전송*/

	function write()
	{
		if($_POST)
		{
			$content = $this->input->post('content',TRUE);
			$created_on = $this->input->post('created_on',TRUE);
			$due_date = $this->input->post('due_date',TRUE);

			$this->todo_m->insert_todo($content,$created_on,$due_date);

			redirect ('/main/lists');
		}else{
			$this->load->view('todo/write_v');
		}

	}

	/*삭제*/
	function delete()
	{
		$id = $this->uri->segment(3);
		$this->todo_m->delete_todo($id);
		redirect('/main/lists');
	}
	
}

/* End of file welcome.php 
/* Location: ./application/controllers/welcome.php */