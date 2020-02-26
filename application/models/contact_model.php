<?php 
	class contact_model extends CI_Model
	{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}


		public function simpan_kritik_saran(){
				$session 			= $this->session->userdata("username_customer");
				$email 				= $this->session->userdata("email_customer");
				$subject 			= $this->input->post('subject');
				$message 			= $this->input->post('message');
				$tanggal 			= date("y-m-d");
				$data 			 	= array("username_customer" => $session,
											"email_customer"	=> $email,
											"subject"			=> $subject,
											"message"			=> $message,
											"tanggal"			=> $tanggal
			);


			$this->db->insert('kritiksaran_tbl',$data);

			// $this->load->view('body/navbar');
			// $this->load->view('produk/contact');
			// $this->load->view('body/footer');
		}
	}

