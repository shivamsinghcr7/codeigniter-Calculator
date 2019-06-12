<?php
class Usermodel extends CI_model
{
	public function getUserdata()
	{
		$this->load->database();
		//$this->db->where("id",1); //select * users where id=1;
		$q=$this->db->get("users");
		//return $q->result();  //result funtion is giving the output fetched by the get
		return $q->result_array(); //geting result in array;
	}


}
 
?>