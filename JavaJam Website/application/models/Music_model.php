<?php
	
		class Music_model extends CI_Model {
			public function _construct(){
				$this->load->database();
			}

			public function get_musicians() {
				
				$query = $this->db->query("Select * from performance p, musician m where p.musicianid = m.musicianid order by MonthYear");
				return $query->result_array();
			}
		}