<?php
	Class Registration extends CI_Model{

		public function insert_registartion_data(){	
				$data =array(
					'f_name' => $this->input->post('f_name'),
					'l_name' => $this->input->post('l_name'),
					'gender' => $this->input->post('gender'),
					'DOB' => $this->input->post('age'),
					'Email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'country' => $this->input->post('country'),
					'city' => $this->input->post('city'),
					'state' => $this->input->post('state'),
					'adrress' => $this->input->post('address'),
					'profile_pic' => md5($_FILES['pic']['name']).$_FILES['pic']['name'],
				);			
		
			$login_data = array();	
			$this->session->set_userdata($data);
			$login_data = array(
				'User_Email' => $this->session->userdata('Email'),
				'password' => $this->session->userdata('password')
				);					

				$this->db->select('COUNT(User_Email) AS email');
				$this->db->where('User_Email',$data['Email']);
				$query = $this->db->get('user_data');	
				$row = $query->row_array();
				
				if($row['email'] == 0){
					$path = 'profile_pics/';							
							$ext = explode('.',$_FILES['pic']['name']);
							if($ext[1] == 'jpg' || $ext[1] == 'jpeg' || $ext[1] == 'png'){
								move_uploaded_file($_FILES['pic']['tmp_name'], $path.md5($_FILES['pic']['name']).$_FILES['pic']['name']);
								
							}else {
									$this->session->set_flashdata('error_msg','pic must be in jpg,jpeg or png format');
								$this->load->view('user_registartion_form');
							}	
				$this->db->insert('user_details',$data);
				$this->db->insert('user_data',$login_data);					
							$this->load->view('user/User_Account');
			}else{
				$this->session->set_flashdata('error_msg','Email already exists. Try another one');				
				$this->load->view('user_registartion_form');
			}

		}
	}
?>