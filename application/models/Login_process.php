<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL);
class Login_process extends CI_Model {

	public function __construct(){
		parent::__construct();
		
	}

	public function login_proces(){
			
		if($this->session->userdata('user_name') !=null){
			$this->load->view('user/User_Account');
		}else{
			$user_details_sess = array(
						'user_name' => $this->input->post('username'),
						'pass' => $this->input->post('password'),
						'submit' => $this->input->post('submit'),
						);
				if(isset($user_details_sess['submit'])){	 
					if($user_details_sess['user_name'] !='' && $user_details_sess['pass'] !=''){			
						
						 $this->session->set_userdata($user_details_sess);  // create session 
	
					$query = $this->db->query('SELECT * FROM user_data WHERE User_Email = "'.trim($this->session->userdata('user_name')).'"');
					//echo $query->num_rows();					
						if($query->num_rows() > 0){
							$result = $query->result_array();
							foreach($result as $row){							
							if($row['User_Email'] == trim($user_details_sess['user_name']) && $row['password'] == trim($user_details_sess['pass'])){
										$this->db->select('f_name,l_name,profile_pic');
										$this->db->where('Email' ,$user_details_sess['user_name']);
										$this->db->from('user_details');
										$query = $this->db->get();
										$row = $query->row_array();																			
										$this->session->set_userdata($row);										
									$this->load->view('user/User_Account');
							}else{
								$this->session->set_flashdata('error','Invalid Username and password');								
								$this->load->view('user/login');
															}}	
						}else{
								$this->session->set_flashdata('error','Invalid Username and password');								
								$this->load->view('user/login');
															}
					}else{
						$this->session->set_flashdata("error",'Username and password is Required');
						
						$this->load->view('user/login');
					}
				}else{
				$this->load->view('user/login');	
				}
				}
	}
}
?>