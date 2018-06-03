<?php 
	
	class Pages extends CI_Controller {
		
		public function view($page = 'index') {

			if(!file_exists(APPPATH. 'views/pages/'. $page .'.php')) {
				
				show_404();
			}
			if($page === 'index') {
				$data['title'] = ucfirst('Home');
			} 
			else {
				$data['title'] = ucfirst($page);
			}

			
			
			$this->load->view('templates/header',$data);
			$this->load->view('pages/'. $page);
			$this->load->view('templates/footer');
			
		}
	}

