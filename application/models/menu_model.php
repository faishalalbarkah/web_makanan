<?php 
	class menu_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->helper('array');
			$this->load->helper('url');
			$this->load->database();
		}

		public function nasibox(){

			$this->db->select('*');
			$this->db->from('daftar_menu');
			$this->db->order_by("menu_makanan","asc");
			return $this->db->get()->result_array();
		}

		public function tampilmenu($menu_makanan){
			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->join('daftar_menu','daftar_menu.makanan_id = makanan_tbl.makanan_id');
			$this->db->where('menu_makanan',$menu_makanan);
			return $this->db->get()->result_array();
		}

		public function gettotalproduct(){
			$this->db->select('*');
			$this->db->from('makanan_tbl');
			$this->db->join('daftar_menu','daftar_menu.makanan_id = makanan_tbl.makanan_id');
			return $this->db->get()->result_array();
		}

		public function getaltotalproduct($start=0,$limit=0){
			if($limit>0){
				$sql="select makanan_tbl.*, daftar_menu.makanan_id from makanan_tbl INNER JOIN daftar_menu ON makanan_tbl.makanan_id=daftar_menu.makanan_id LIMIT " . $start .",".$limit;
				$query=$this->db->query($sql);
				return $query->result_array();
			}
			else
			{
				return NULL;
			}

		}
	}
