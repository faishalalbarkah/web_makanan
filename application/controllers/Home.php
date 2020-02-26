<?php
	class Home extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('produk_model');
			$this->load->model('menu_model');
			$this->load->library('cart');
		}
		public function index(){
			$data['nasibox']=$this->menu_model->nasibox();
			$data['Nasi_Box']=$this->produk_model->nasibox();
			$data['Cake']=$this->produk_model->cakee();
			$data['Snack_Box']=$this->produk_model->snackbox();
			$data['image_makanan']=$this->produk_model->newproduk();
			$data["blogss"]=$this->produk_model->blogg();
			// $data['image_makanan']=$this->produk_model->bestproduk();
			$this->load->view('body/navbar',$data);
			$this->load->view('produk/produk',$data);
			$this->load->view('body/footer');
		}

		public function about(){
			$data['nasibox']=$this->menu_model->nasibox();
			$this->load->view('body/navbar',$data);
			$this->load->view('produk/about');
			$this->load->view('body/footer');
		}

		public function contact(){
			$data['nasibox']=$this->menu_model->nasibox();
			$this->load->view('body/navbar',$data);
			$this->load->view('produk/contact');
			$this->load->view('body/footer');
		}

		

	}