<?php
	class menu_contro extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('menu_model');
			$this->load->library('pagination');
			
		}

		public function index(){
			$data['nasibox']=$this->menu_model->nasibox();
			$this->load->view('body/navbar',$data);
			$this->load->view('produk/menu',$data);
			$this->load->view('body/footer');
		}

		public function tampilkannasibox($menu_makanan){
			$data['nasibox']=$this->menu_model->nasibox();
			$data['tampilnasi']=$this->menu_model->tampilmenu($menu_makanan);
			$this->load->view('body/navbar',$data);
			$this->load->view('produk/menu',$data);
			$this->load->view('body/footer');	
		}

		function paging(){
			$config['base_url']=base_url() . "menu_contro";
			$config['per_page']=6;
			$config['uri_segement']=2;
			$config['total_rows']=$this->menu_model->gettotalproduct();
			$config['first_link']="first";
			$config['last_link']="last";
			$config['next_link']="next";
			$config['prev_link']="prev";
			$config['full_tag_open']="<div class='pagging text-center'><nav><ul class='pagination' justify-content-center'>";
			$config['full_tag_close']="</ul></nav></div>";
			$config['num_tag_open']="<li class='page-item'><span class='page-link'>";
			$config['num_tag_close']="</span></li>";
			$config['cur_tag_open']="<li class='page-item active'><span class='page-link'>";
			$config['cur_tag_close']="<span class='sr-only'>(current)</span></span></li>";

			$config['next_tag_open']="<li class='page-item'><span class='page-link'>";
			$config['next_tag_close']="</span></li>";
			$config['prev_tag_open']="<li class='page-item'><span class='page-link'>";
			$config['prev_tag_close']="</span></li>";

			$config['first_tag_open']="<li class='page-item'><span class='page-link'>";
			$config['first_tag_close']="</span></li>";

			$config['last_tag_open']="<li class='page-item'><span class='page-link'>";
			$config['last_tag_close']="</span></li>";

			$this->pagination->initialize($config);
			$start_data=($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$data["tampilnasi"]=$this->menu_model->getaltotalproduct($start_data,$config["per_page"]);
			$this->load->view('body/navbar',$data);
			$this->load->view('produk/menu',$data);
			$this->load->view('body/footer');
		}

	}