<?php 
	class blog_model extends CI_Model
		{
		public function __construct(){
			parent::__construct();
			$this->load->helper('array');
			$this->load->helper('url');
			$this->load->database();
		}

		public function bloggs(){
			$this->db->select('*');
			$this->db->from('blog');
			// $this->db->order_by('image_blog',"ASC");
			return $this->db->get()->result_array();
		}
	}