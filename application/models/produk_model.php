<?php 
	class produk_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->helper('array');
			$this->load->helper('url');
			$this->load->database();
		}

		public function nasibox()
		{
			$result = array();
			$status = 'Nasi_Box';

			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->join('daftar_menu','daftar_menu.makanan_id=makanan_tbl.makanan_id');
			$this->db->order_by('makanan_tbl.create_date', "DESC");
			$this->db->where('menu_makanan',$status);
			return $this->db->limit(4)->get()->result_array();
		}

		public function cakee(){
			$result = array();
			$status = 'Cake';

			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->join('daftar_menu','daftar_menu.makanan_id=makanan_tbl.makanan_id');
			$this->db->order_by('makanan_tbl.create_date', "DESC");
			$this->db->where('menu_makanan',$status);
			return $this->db->limit(4)->get()->result_array();
		}

		public function snackbox(){
			$result = array();
			$status = 'Snack_Box';

			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->join('daftar_menu','daftar_menu.makanan_id=makanan_tbl.makanan_id');
			$this->db->order_by('makanan_tbl.create_date', "DESC");
			$this->db->where('menu_makanan',$status);
			return $this->db->limit(4)->get()->result_array();
		}

		public function newproduk(){
			
			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->order_by('image_makanan', "ASC");
			// $this->db->where('image_makanan');
			return $this->db->limit(8)->get()->result_array();
		}

		public function blogg(){
			$this->db->select('*');
			$this->db->from('blog');
			// $this->db->order_by("ASC");
			return $this->db->get()->result_array();
		}

		// public function bestproduk(){
			
		// 	$this->db->select('*');
		// 	$this->db->from('makanan_tbl');
		// 	$this->db->order_by('image_makanan', "DESC");
		// 	// $this->db->where('image_makanan');
		// 	return $this->db->limit(8)->get()->result_array();
		// }

		


	}