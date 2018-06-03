<?php 
	
	class PlaceOrder extends CI_Controller {

		public function confrimOrder($popup = False) {
			$this->load->library('cart');

			$data['title'] = 'Place Your Order';
			$data['popup'] = $popup;
			
			$this->load->view('templates/header',$data);
			$this->load->view('pages/placeyourorder');
			$this->load->view('templates/footer');
			
		}

		public function insertOrder(){

			$this->load->library('cart');

			$data['title'] = 'Place Yor Orders';

			$this->form_validation->set_rules('name','Name','required|callback_istext_check|xss_clean');
			$this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
			$this->form_validation->set_rules('address','Address','required|xss_clean');
			$this->form_validation->set_rules('address','Address','required'); 
			$this->form_validation->set_rules('city','City','required|callback_istext_check|xss_clean');
			$this->form_validation->set_rules('state','State','required|callback_istext_check');
			$this->form_validation->set_rules('zip','Zip','required|callback_isnumber_check');
			$this->form_validation->set_rules('cc','Credit Card','required|max_length[16]|min_length[16]|callback_isnumber_check|xss_clean');
			$this->form_validation->set_rules('month','Month','required|callback_isnumber_check|callback_isMonth_check|xss_clean');
			$this->form_validation->set_rules('yr','Year','required|callback_isnumber_check|callback_isyear_check|xss_clean');

			if(!$this->form_validation->run()){
				$data['popup'] = False;
				$this->load->view('templates/header',$data);
				$this->load->view('pages/placeyourorder',$data);
				$this->load->view('templates/footer');
			} else {
				if(count($this->cart->contents())>0){
					$this->order_model->insertOrder();
					$this->cart->destroy();
					redirect('placeOrder/confrimOrder');
				}
				else {
					print_r("expression");
					
               		redirect('placeOrder/confrimOrder/.True');
				}
			}
				
		}

		public function istext_check($str) {
			if(!preg_match( '~\d~', $str)) {
				return TRUE;
			} else {
				$this->form_validation->set_message('istext_check', 'The {field} field should contain only text');
                return FALSE;
			}
		}

		public function isnumber_check($str) {
			if(is_numeric($str)) {
				return TRUE;
			} else {
				$this->form_validation->set_message('isnumber_check', 'The {field} field should be numeric');
                return FALSE;
			}
		}

		public function isMonth_check($str) {
			if($str > '0' && $str < '12') {
				return TRUE;
			} else {
				$this->form_validation->set_message('isMonth_check', 'The {field} is not valid');
                return FALSE;
			}
		}

		public function isyear_check($str) {
			if($str >= '18') {
				return TRUE;
			} else {
				$this->form_validation->set_message('isyear_check', 'The {field} is not valid');
                return FALSE;
			}
		}
        
	}