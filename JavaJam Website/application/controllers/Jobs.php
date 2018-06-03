<?php 
	
	class Jobs extends CI_Controller {
		
		public function applyJob() {

			$data['title'] = 'Jobs';

			
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('exp','Experience','required');

			if(!$this->form_validation->run()){

				$this->load->view('templates/header',$data);
				$this->load->view('pages/jobs',$data);
				$this->load->view('templates/footer');
			} else {
				$this->jobs_model->addJob();
				$this->load->view('templates/header',$data);
				$this->load->view('pages/jobs',$data);
				$this->load->view('templates/footer');
			}
			
			
		}

		
	}