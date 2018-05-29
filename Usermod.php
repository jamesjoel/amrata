<?php

class Usermod extends CI_Model{
	function __construct()
	{
		$this->load->database();
	}
	function save($data)
	{
		//INSERT INTO user (full_name, username, ...) VALUES ($a)
		$this->db->insert('user', $data);
	}

	function auth($u)
	{
		$this->db->where('username', $u);
		$obj=$this->db->get('user');
		return $obj;
		//SELECT * FROM user WHERE username='$u'
	}
	function getdata($a)
	{
		//SELECT * FROM user WHERE id='$a'
		$this->db->where("id", $a);
		$obj=$this->db->get('user');
		return $obj;

	}
	function getall()
	{
		$obj=$this->db->get('user');
		return $obj;		
	}

	function update($id, $arr)
	{
		//UPDATE user SET col1=value1, col2=value2, .... WHERE id=2
		$this->db->where("id", $id);
		$this->db->update('user', $arr);
	}

}

?>