<?php 
	
	class Products extends CI_Controller {
		
		public function gears() {

			$data['products'] = $this->products_model->get_products();

			$data['title'] = 'Gears';
			$this->load->view('templates/header',$data);
			$this->load->view('pages/gear',$data);
			$this->load->view('templates/footer');
			
		}

		
	}