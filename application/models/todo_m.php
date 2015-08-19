<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/*
*todo모델*/

class Todo_m extends Ci_Model
{
	function __construct()
	{
		parent::__construct();
	}

	/*목록가져오기*/

	function get_list()
	{
		$sql = "SELECT * FROM items";

		$query = $this->db->query($sql);

		$result = $query->result();

		return $result;
	}

	function get_view($id)
	{
		$sql = "SELECT * FROM items WHERE id='".$id."'";

		$query = $this->db->query($sql);

		$result = $query->row();

		return $result;
	}

	/*작성*/
	function insert_todo($content,$created_co,$dud_date)
	{
		$sql = "INSERT INTO items (content, created_on,due_date) VALUE ('".$content."','".$created_co."','".$dud_date."')";
		$query = $this->db->query($sql);
	}

	/*삭제*/
	function delete_todo($id){
		$sql = "DELETE FROM items WHERE id ='".$id."'";
		$query =  $this->db->query($sql);
	}
}

