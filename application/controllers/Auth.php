<?php
	class Auth extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->model('user_model');
		}

		public function index(){
			$this->load->view('body/navbar');
			$this->load->view('produk/produk');
			$this->load->view('body/footer');
		}

		public function Registrasi(){


			$data["ambilprov"]=$this->user_model->ambilprovinsi();

			$this->form_validation->set_rules('name_customer', 'Name', 'trim|required|min_length[4]|max_length[22]');
            $this->form_validation->set_rules('email_customer', 'Email', 'trim|required|valid_email|is_unique[customer_tbl.email_customer]');
            $this->form_validation->set_rules('phone_customer', 'No Telepon', 'trim|required|min_length[10]|max_length[12]');
            $this->form_validation->set_rules('address_customer', 'alamat', 'trim|required|min_length[10]|max_length[40]');
            $this->form_validation->set_rules('username_customer', 'Username', 'trim|required|is_unique[customer_tbl.username_customer]');
            $this->form_validation->set_rules('password_customer', 'Pasword', 'trim|required|min_length[5]|is_unique[customer_tbl.password_customer]');

			$this->form_validation->set_message('required', '{field} Mohon isi data dengan benar');
			$this->form_validation->set_message('valid_email', 'Email Sudah di gunakan');
			$this->form_validation->set_message('numeric', 'berupa Angka');
			$this->form_validation->set_message('is_unique', '%telah dipakai');
			if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('body/navbar',$data);
					$this->load->view('registrasi_user/register',$data);
					$this->load->view('body/footer');
				}else
				{
					$this->user_model->simpandatauser();
					$this->session->set_flashdata('flash','Registrasi Berhasil');
					redirect('Auth/Registrasi');
				}
			}

			public function Profile(){
				$data["get_session"]=$this->user_model->get_session_login($this->session->userdata('username_customer'));
				$this->load->view('body/navbar',$data);
				$this->load->view('registrasi_user/login',$data);
				$this->load->view('body/footer');
			}

			public function loginSubmit(){
			// $data['Nasi_Box']=$this->produk_model->nasibox();
			// $data['Cake']=$this->produk_model->cakee();
			// $data['Snack_Box']=$this->produk_model->snackbox();
			// $data['image_makanan']=$this->produk_model->newproduk();
			$this->form_validation->set_rules('username_customer','Username','trim|required');
			$this->form_validation->set_rules('password_customer','Password','trim|required');
			if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata("message","faill satu");
			}else{
				if($this->user_model->cheklogin($_POST["username_customer"],$_POST["password_customer"])>0){
					$this->session->set_userdata("username_customer",$_POST["username_customer"]);
					$this->session->set_userdata("email_customer",$this->user_model->get_email_customer($_POST["username_customer"]));
					$this->session->set_userdata("password_customer",$_POST["password_customer"]);
					redirect(base_url()."Home");
				}else{
					$data["loginerror"]="Username atau Password anda salah";
					$this->session->set_flashdata("message",'faill');
					$this->load->view('body/navbar',$data);
					$this->load->view('produk/produk',$data);
					$this->load->view('body/footer');
				}
			}
		}

		public function Logout(){
			$this->session->sess_destroy();
			redirect('Home');
		}
	}