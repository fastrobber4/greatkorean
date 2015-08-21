<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Sign_m extends Ci_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function insertsign($name,$info,$address)
	{
		
		$sql = "INSERT INTO signer (username,infonum,address) VALUE ('".$name."','".$info."','".$address."')";
		$query = $this->db->query($sql);
	}


}