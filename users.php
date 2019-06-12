<?php
class Users extends CI_Controller
{

	public function User()
	{
		// echo "userdata";
		$this->load->model('Usermodel'); //calling model class
		$data['anykeyword']=$this->Usermodel->getUserdata(); //calling the function from the model.
		// print_r($data); its main function is to debug and check for errors, shows where the errors are actually.
		$this->load->view('Users/userlist',$data); //telling the view() what  data it has to load.
	}
}


?> 