<?php 
	defined('BASEPATH') or exit('No direct script access allowed');
	/**
	 * 
	 */
	class Register extends CI_Controller
	{
		

		public function index($page ='register')
		{
			 // if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
		  //       {
		  //               // Whoops, we don't have a page for that!
		  //               show_404();
		  //       }

		    $this->load->model('Users_Model');
			// $this->load->view('register');
			$data['usr_name']=$this->input->post('name');
			$data['usr_email']=$this->input->post('email');
			$data['usr_phone']=$this->input->post('phone');
			$data['usr_pass']=$this->input->post('pass');
			$data['usr_updated']=$this->input->post('update');

			$result=$this->load->Users_Model->user_add($data);
			if($result)
			{
				echo "User Added";
			}
		}
	}
 ?>