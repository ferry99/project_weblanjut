<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct(){
		parent::__construct();		
        $this->load->model('my_model');
		$this->load->library('session');
		$this->load->helper('url');
        $this->load->helper('sub');
        $this->load->library('form_validation');
    }

	public function index(){
		$username = $this->session->userdata('username');
		$data['message'] = $this->session->flashdata('message');
		$data['LoggedIn'] = LoggedIn();
		if (empty($username)){					
			$this->load->view('checklogin',$data);			
		} else {
			redirect('site');
		}			
	}
	
	
	public function validasi(){
		$this->form_validation->set_rules('name', 'name', 'required|max_length[25]|xss_clean');
		$this->form_validation->set_rules('pass', 'pass', 'required|max_length[25]|xss_clean');
		$data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $data['message'] = '';
        
		if ($this->form_validation->run() === true) {
			$username = $this->input->post('name');
			$password = $this->input->post('pass');			
			$row = $this->my_model->getUsername($username)->row();
			if ($row == null) {
				$data['message'] = 'Username doesnt exist';
				$this->load->view('checklogin',$data);
			}
			elseif ($row->Password == $password){						
				$this->session->set_userdata('username',$row->Username);			
				redirect('login');
			}else {
		        $data['message'] = 'Wrong Username or password';
				$this->load->view('checklogin',$data);
			}				
		}elseif($this->form_validation->run() === false){
			$this->load->view('checklogin',$data);
		}
		
	}
	
	public function logout(){
		$this->session->unset_userdata('username');		
		redirect('site');
	}
	

	
}

