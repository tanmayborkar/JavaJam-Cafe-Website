<?php
	
		class Order_model extends CI_Model {
			public function _construct(){
				$this->load->database();
			}

			public function insertOrder() {
				$data = array(
					'Name' => $this->input->post('name'),
					'EmailId' => $this->input->post('email'),
					'Address' => $this->input->post('address'),
					'City' => $this->input->post('city'),
					'State' => $this->input->post('state'),
					'City' => $this->input->post('city'),
					'Zip' => $this->input->post('zip'),
					'Credit_Card' => $this->input->post('cc'),
					'Month' => $this->input->post('month'),
					'Year' => $this->input->post('yr')
				);

				$this->db->insert('orders',$data);

				$orderId =  $this->db->insert_id();

				

				foreach ($this->cart->contents() as $items):
					$this->db->select('productid');
					$this->db->from('products');
					$this->db->where('name',$items['name']);
					$query= $this->db->get();
					$row['products'] = $query->result_array();
					$ProductId = current($row);
					$id = current($ProductId);
					$data = array(
					'OrderId' => $orderId,
					'ProductId' => current($id),
					'Qty' => $items['qty'],
					'Price' => $items['subtotal']
				);		

				$this->db->insert('orderitems',$data);
				endforeach;			
				//print_r($orderId);
				//$query = $this->db->query("Select productid from products where name=");
				//return $query->result_array();
			}
		}