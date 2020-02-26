<?php
	class Adminlogin extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Admin_model');
		}

		public function index(){
			$this->load->view("ADMIN/Login");
		}

		public function loginsubmit(){
			$this->form_validation->set_rules('username','Username','required',Array('required' => ' Silahkan Masukan Username dahulu'));
			$this->form_validation->set_rules('password','Password','required',Array('required' => ' Silahkan Masukan Password dahulu'));

			if($this->form_validation->run()==false){
				$this->load->view('ADMIN/Login');
			}else{
				if($this->Admin_model->ceklogin($_POST["username"],$_POST["password"])>0){
					$this->session->set_userdata("username",$_POST["username"]);
					redirect(base_url() . "AdminMain");
				}
				else {
					$data["loginerror"]="Username dan password anda salah";
					$this->load->view('ADMIN/Login',$data);
				}
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('Adminlogin');
		}
	}