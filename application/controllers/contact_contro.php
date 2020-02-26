<?php
	class contact_contro extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('contact_model');
			$this->load->model('user_model');
		}

		// public function chekcontact(){
		// 		$data['sendkritiksaran'] = $this->user_model->get_session_login($this->session->userdata('username_customer','email_customer'));

		// 		$this->load->view('body/navbar',$data);
		// 		$this->load->view('produk/contact',$data);
		// 		$this->load->view('body/footer',$data);
		// 	}

		// public function simpan_kritik_saran(){
		// 	$array = (
		// 	$session 			= $this->session->userdata("username_customer");
		// 	$email 				= $this->session->userdata("email_customer");
		// 	$subject 			= $this->input->post('subject');
		// 	$message 			= $this->input->post('message');
		// 	$tanggal 			= date("y-m-d");
		// 	$datakritiksaran 	= array("username_customer" => $session,
		// 								"email_customer"	=> $email,
		// 								"subject"			=> $subject,
		// 								"message"			=> $message,
		// 								"tanggal"			=> $tanggal
		// 	);

		// 	$kritiksaran = $this->contact_model->simpankritiksaran($datakritiksaran);

		// 	$this->load->view('body/navbar');
		// 	$this->load->view('produk/contact');
		// 	$this->load->view('body/footer');
		// }

		public function simpankritik(){
			$this->contact_model->simpan_kritik_saran();
			redirect('Home/index');
		}

	}