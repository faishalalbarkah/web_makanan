<?php
	class AdminMain extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Admin_model');
		}

		public function index(){
			$data["content_page"]="ADMIN/home_content_admin";
			$data["produk"]=$this->Admin_model->produk();
			$this->load->view("ADMIN/index",$data);
		}

		// public function blogs(){
		// 	$data["content_page"]="ADMIN/blog";
		// 	$data["blogss"]=$this->Admin_model->blog();
		// 	$this->load->view("ADMIN/index",$data);
		// }

		public function hapus($id){
		$data['content_page']="ADMIN/home_content_admin";
		$data["produk"]=$this->Admin_model->delete($id);
		$this->load->view("ADMIN/index",$data);
		redirect('AdminMain');
		}

		public function addproduk(){
			$data["cetakmakanan"]=$this->Admin_model->ambilmenu();
			$data['content_page']="ADMIN/Tambah_produk";
			$this->load->view("ADMIN/index",$data);
		}

		public function simpan_produk(){
			$config['upload_path']		= './asset/images';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']			= 40000;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload("image_makanan");
			$data = $this->upload->data();

			$gambar = $data['file_name'];

			$data_makanan = array('nama_makanan' 		=>$this->input->post('nama_makanan'),
								 'harga_makanan' 		=>$this->input->post('harga_makanan'),
								 'deskripsi_makanan' 	=>$this->input->post('deskripsi_makanan'),
								 'create_date' 			=>date('Y-m-d'),
								 'image_makanan' 		=>$gambar,
								 'makanan_id' 			=>$this->input->post('makanan_id'));

			$simpan_data	= $this->Admin_model->simpan_data_produk($data_makanan);
			$data["content_page"] = "ADMIN/home_content_admin";
			$this->load->view("ADMIN/index",$data);
			redirect("AdminMain");
		}

		public function editmakanan($id){ 
			$data["cetakmakanan"] = $this->Admin_model->ambilmenu();
			$data['content_page'] = "ADMIN/ubah_data_makanan";
			$data['data_makanan'] = $this->Admin_model->edit_makanan($id);
			$this->load->view("ADMIN/index",$data);
		}

		public function updatedata($id){
			$config['upload_path']		= './asset/images';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 40000;
			$gambar=$this->input->post('gambar_old');

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload("image_makanan");
			$data = $this->upload->data();

			if($this->upload->do_upload("image_makanan")){
			$gambar = $data['file_name'];
			}
			$data_makanan = array('nama_makanan' 		=>$this->input->post('nama_makanan'),
								 'harga_makanan' 		=>$this->input->post('harga_makanan'),
								 'deskripsi_makanan' 	=>$this->input->post('deskripsi_makanan'),
								 'create_date' 			=>date('Y-m-d'),
								 'image_makanan' 		=>$gambar,
								 'makanan_id' 			=>$this->input->post('makanan_id'));

			$simpan_data	= $this->Admin_model->ubah_data_makanan($data_makanan,$id);
			$data["content_page"] = "ADMIN/home_content_admin";
			$this->load->view("ADMIN/index",$data);
			redirect("AdminMain");
		}

		public function tampil_datajual(){
			$data["content_page"]="ADMIN/data_penjualan";
			$data["datajual"]=$this->Admin_model->data_jual();
			$this->load->view('ADMIN/index',$data);
		}

		public function tampil_databayar(){
			$data['content_page']="ADMIN/data_pembayaran";
			$data["databayar"]=$this->Admin_model->data_bayar();
			$this->load->view('ADMIN/index',$data);
		}
	}