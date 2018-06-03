<?php 
	
	class Carts extends CI_Controller {

		public function addtoCart() {
			$this->load->library('cart');

			$insert = False;
			$data1['title'] = 'Cart';

			if($this->input->post('desc')!= null || $this->input->post('desc') != '') {
				$id = $this->input->post('id');
				$price = $this->input->post('cost');
				$name = $this->input->post('desc');
				$insert = True;
			}
			// } else if ($this->input->post('desc2')!= null || $this->input->post('desc2') != '') {
			// 	$id = 'mug';
			// 	$price = '9.95';
			// 	$name = $this->input->post('desc2');
			// 	$insert = True;
			// } else if($this->input->post('desc3')!= null || $this->input->post('desc3') != '') {
			// 	$id = 'poster';
			// 	$price = '4.95';
			// 	$name = $this->input->post('desc3');
			// 	$insert = True;
			// } else if($this->input->post('desc4')!= null || $this->input->post('desc4') != '') {
			// 	$id = 'sticker';
			// 	$price = '1.95';
			// 	$name = $this->input->post('desc4');
			// 	$insert = True;
			// } 
			

			$this->load->view('templates/header',$data1);
			if($insert) {
				$data = array(
        		'id'      => $id,
        		'qty'     => 1,
        		'price'   => $price,
        		'name'    => $name
				);
				$this->cart->insert($data);
				$this->load->view('pages/cart',$data);
			} else {
				$this->load->view('pages/cart');
			}
			$this->load->view('templates/footer');
		}

		public function onbuttonAction() {
			if($this->input->post('continue') === 'continue') {
				redirect('products/gears');
			}

			if($this->input->post('continue') === 'order') {
				redirect('placeorder/confrimorder');
			}
		}

	}