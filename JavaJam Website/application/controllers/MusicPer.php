<?php 
	
	class MusicPer extends CI_Controller {
		
		public function musicians() {
			
			$data['music'] = $this->music_model->get_musicians();
			
			// foreach ($data['music'] as $mus) : 
			// 	$data[$months[substr ( $mus['MonthYear'] , 0 , 2 )]] = $mus;
			// 	//$data[$mus]['month'] = $month;
			// 	//print_r($data[$mus['MonthYear']])	;
			// endforeach;
			//print_r($data['January'])	;
			$data['title'] = 'Music';
			$this->load->view('templates/header',$data);
			$this->load->view('pages/music',$data);
			$this->load->view('templates/footer');
			
		}

		
	}