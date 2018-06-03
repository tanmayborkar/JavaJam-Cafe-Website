<?php
	
		class Products_model extends CI_Model {
			public function _construct(){
				$this->load->database();
			}

			public function get_products() {
				$query = $this->db->get('products');
				return $query->result_array();
			}
		}