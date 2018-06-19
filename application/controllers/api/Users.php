<?php 
	// use Restserver\libraries\Rest_Controller;

	require APPPATH .'/libraries/Rest_Base_Controller.php';
	/**
	 * 
	 */
	class Users extends Rest_Base_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Users_Model');
		}

		public function users_get()
		{
			// http://localhost/shashikant/ci/crud/api/users/
			$data= $this->Users_Model->fetch_all_users_data();
			$this->response($data);
		}

		public function users_add_post()
		{
			$_POST=$this->__getjson();
			$data['usr_name']=$this->input->post('name');
			$data['usr_email']=$this->input->post('email');
			$data['usr_phone']=$this->input->post('phone');
			$data['usr_pass']=$this->input->post('pass');
			$data['usr_updated']=$this->input->post('update');

			$result=$this->Users_Model->user_add($data);
			if($result){
				$data = array('status' =>201 ,'message'=>'Data inserted' );
			}else{
				$data = array('status' =>300 ,'message'=>'failed' );
			}

			// $result= array('return');
			$this->response($data);
		}
	}
 ?>

 