<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart_fetch_data extends CI_model{

function __construct(){
	parent:: __construct();
	error_reporting(E_ALL);	 
}

public function fetch_url_value(){
	$url = $_SERVER['QUERY_STRING'];
	$product_info = explode('?',$url);
	$image = explode('=',$product_info[0]);
	$price = explode('=',$product_info[1]);
	$product_sess = array(
		'image' => $image[1],
		'price' => $price[1],
		'total_price' => $price[1]
		);
	
		$this->add_cart($product_sess);		
}

public function product_quantity(){  // change quantity products 
	
	if(isset($_GET['id'])){		
	$quantity = $this->input->post('quantity_value');
		if($this->input->post('plus') && $this->input->post('plus')!=''){
				$quantity = $quantity+1;
				$data = array(
						'rowid' => $_GET['id'],
						'qty' => $quantity
					);
				$this->cart->update($data);
		}else if($this->input->post('minus') && $this->input->post('minus')!=''){
				if($quantity == 1){
					$quantity = 1;
				}else{
					$quantity = $quantity-1;
				}
				$data = array(
						'rowid' => $_GET['id'],
						'qty' => $quantity
					);
				$this->cart->update($data);

		}}
		$this->load->view('cart.php');

}

	public function add_cart($items){ // insert data to database

		$order_date = date("F d, Y h:i:s A");		
		$delivery_date = 'CURDATE()+1';		
		$whr = array('email_id' => $this->session->userdata('user_name'),
			'product' => $items['image'],
			'status'=>0);
		$this->db->select('COUNT(status) AS no');
		$this->db->where($whr);
		$query = $this->db->get('add_cart');
		$row = $query->row_array();
			if($row['no'] == 0){
				$product_detail = array(
					'name' => $this->db->escape(trim($this->session->userdata('f_name')." ".$this->session->userdata('l_name'))),
					'email_id' => $this->db->escape_str(trim($this->session->userdata('user_name'))),
					'product' => $this->db->escape_str($items['image']),
					'price' => $this->db->escape_str($items['price']),
					'order_date' => $this->db->escape_str($order_date),
					'delivey_date' => $this->db->escape_str($delivery_date),
					'status' => 0,
					'quantity' => 1,
					'id' => md5(10)
					);
		
				$this->db->insert('add_cart',$product_detail);
						
			}
			$this->cart_data();
	}


	public function cart_data(){  // insert product details in cart class by retrieve from database
		
		$whr = array(
			'email_id' => $this->session->userdata('user_name'),
			'status'=>0
	);
		$this->db->select();
		$this->db->where($whr);
		$query = $this->db->get('add_cart');
		$items = $query->result();
		
		$product_data = array();
		$i=0;
		foreach($query->result() as $items){			
			$product_data[$i++] = array(
				'id' => $items->id,
				'qty' => $items->quantity,
				'price' => $items->price,
				'name' => $items->product			
				
			);
			
		}
		
		// echo "<pre>";
		// print_r($product_data);
		// die();
	

$this->cart->insert($product_data);	
	$this->load->view('cart');

	}

	public function delete_from_cart(){ // delete product from cart and change status 0 to 1 in database

		if(isset($_GET['delete'])){			
			foreach($this->cart->contents() as $items){	

				if($items['rowid'] ==  $_GET['delete']){				
					$whr = array('email_id' => $this->session->userdata('user_name'),
					'product' => $items['name']);
					$upt = array('status' => 1);
			 			   $this->db->where($whr);	
							$this->db->update('add_cart',$upt);	
								}
		$data = array(
					'rowid' => $_GET['delete'],
					'qty' => 0
					);
			$del = $this->cart->update($data);	
				}

				
	}$this->load->view('cart');
}


}// class end