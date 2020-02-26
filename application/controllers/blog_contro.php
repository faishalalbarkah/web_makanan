<?php
	class blog_contro extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('blog_model');
			$this->load->model('menu_model');
			$this->load->library('cart');
		}

		public function blogindex(){
			$data['nasibox']=$this->menu_model->nasibox();
			$data['blogsss']=$this->blog_model->bloggs(); 
			$this->load->view('body/navbar',$data);
			$this->load->view('produk/blog',$data);
			$this->load->view('body/footer');
		}
	}