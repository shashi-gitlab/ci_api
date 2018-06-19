<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Users_Model extends CI_Model
	{
		
		public function fetch_all_users_data()
		{
			$this->load->database();
			$query=$this->db->get('tbl_users');
			foreach ($query->result() as $row) {
				$data[]=[
					'Name'=> $row->usr_name,
					'Email'=> $row->usr_email,
					'Phone'=> $row->usr_phone,
				];
			}
			return $data;
		}

		public function user_add($user_data)
		{
			$this->load->database();
			return $this->db->insert('tbl_users', $user_data);
			// return $this->insert_id();
		}
	}

 ?>