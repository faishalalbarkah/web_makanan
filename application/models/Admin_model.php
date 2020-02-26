<?php 
	class Admin_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function ceklogin($username,$password){
			$this->db->from('admin_tbl');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get()->num_rows();
		}

		public function delete($id){
			$this->db->where('id',$id);
			$this->db->delete('makanan_tbl');
		}

		public function produk(){
			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->join('daftar_menu','daftar_menu.makanan_id=makanan_tbl.makanan_id');
			return $this->db->get()->result_array();
		}

		// public function blog(){
		// 	$this->db->select('*');
		// 	$this->db->from('blog');
		// 	return $this->db->get()->result_array();
		// }

		public function simpan_data_produk($data){
			$this->db->insert('makanan_tbl',$data);
		}

		public function ambilmenu(){
			$this->db->select('*');
			$this->db->from('daftar_menu');
			$this->db->order_by('menu_makanan', "ASC");
			$query= $this->db->get();
			return $query->result_array();
		}

		public function edit_makanan($id){
			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->join('daftar_menu','daftar_menu.makanan_id=makanan_tbl.makanan_id');
			$this->db->where('id',$id);
			return $this->db->get()->row_array();
		}

		public function ubah_data_makanan($data,$id){
			$this->db->where('id',$id);
			$this->db->update('makanan_tbl',$data);
		}

		public function data_jual(){
			$this->db->select('*');
			$this->db->from('data_order');
			$this->db->join('detail_order','detail_order.order_id=data_order.order_id');
			$this->db->join('makanan_tbl','detail_order.id=makanan_tbl.id');
			return $this->db->get()->result_array();
		}

		public function data_bayar(){
			return $this->db->get('pembayaran')->result_array();
		}
	}