<?php
	
		class Jobs_model extends CI_Model {
			public function _construct(){
				$this->load->database();
			}

			public function addJob() {
				$data = array(
					'Name' => $this->input->post('name'),
					'Email' => $this->input->post('email'),
					'Experience' => $this->input->post('exp')
				);

				return $this->db->insert('jobs',$data);
			}
		}