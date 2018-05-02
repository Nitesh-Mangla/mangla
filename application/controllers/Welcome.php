<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->helper('form');
       $this->load->helper('url');
       
	}
	
	public function index()
	{   
		$this->load->view('index.php');
	}

	public function login(){
		$this->load->view('user/login.php');
	}

	public function login_process(){
		
		$this->load->model('Login_process');
		$this->Login_process->login_proces();
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->cart->destroy();
		$this->load->view('user/login');
	}
	
	public function cart(){
		$this->load->view('cart.php');
		$this->load->model('Cart_fetch_data');
		$this->Cart_fetch_data->fetch_url_value();
		
	}

	public function product_q(){
			$this->load->model('Cart_fetch_data');
			//$this->Cart_fetch_data->fetch_url_value();
		    $this->Cart_fetch_data->product_quantity();
	}

	public function cart_delete(){
		$this->load->model('cart_fetch_data');
		$this->cart_fetch_data->delete_from_cart();
	}

	public function cart_detail(){
$this->load->model('cart_fetch_data');
		$this->cart_fetch_data->cart_data();
	}

	public function user_registration_form(){
		
		$submit = $this->input->post('submit');
		if(isset($submit) && $submit == 'Register'){
			$this->load->model('Registration');
			$this->Registration->insert_registartion_data();
		}else{
			$this->load->view('user_registartion_form');
		}
	}
}
