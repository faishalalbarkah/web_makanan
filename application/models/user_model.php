<?php 
	class user_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function ambilprovinsi(){
			return $this->db->get('propinsi')->result_array();
		}

		public function simpandatauser(){
			$data = array(
				'username_customer' 	=> $this->input->post('username_customer', true),
				'email_customer' 		=> $this->input->post('email_customer', true),
				'password_customer' 	=> $this->input->post('password_customer', true),
				'phone_customer' 		=> $this->input->post('phone_customer', true),
				'address_customer' 		=> $this->input->post('address_customer', true),
				'provinsi' 				=> $this->input->post('input_provinsi', true),
				'name_customer' 		=> $this->input->post('name_customer', true),
				'create_date'			=> date('y-m-d H:i:s'),
			);
			
			$this->db->insert('customer_tbl',$data);
		}

		public function cheklogin($username,$password)
		{
			$this->db->from('customer_tbl');
			$this->db->where('username_customer',$username);
			$this->db->where('password_customer',$password);
			return $this->db->get()->num_rows();
		}

		public function get_session_login($customer_id){
		$this->db->where('username_customer',$customer_id);
		$query= $this->db->get('customer_tbl');
		return $query->row_array();
		}

		public function get_email_customer($username)
		{
			$sql = "Select email_customer FROM customer_tbl WHERE username_customer = '$username' ";	
			$query = $this->db->query($sql);
			$row = $query->row();
			return $row->email_customer;		
		}
	}