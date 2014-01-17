<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    
    public function index(){
	
	$data['title'] = 'Sign In | HoatziNest';
	$this->load->library('form_validation');
	$this->form_validation->set_rules('email', 'trim|required|valid_email|xss_clean');
	$this->form_validation->set_rules('password', 'trim|required|min_length[4]|max_length[32]');
	$this->load->view('header', $data);
	$this->load->view('login');
	$this->load->view('footer');
    }
    

    
    public function signup(){
	
	$data['title'] = 'Sign Up | HoatziNest';

	$this->load->view('header', $data);
	$this->load->view('signup');
	$this->load->view('footer');
	
	    
    }
    
    public function create_member(){
	
	$this->load->library('form_validation');
	
	$this->form_validation->set_rules('first_name', 'Name', 'trim|required|max_length[40]');
	$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[40]');
	$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|xss_clean|callback_check_if_email_exists');
	$this->form_validation->set_rules('location', 'Location', 'trim|required|max_length[50]');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
	$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');
	
	if ($this->form_validation->run() == FALSE){
	    
	    $this->load->view('header');
	    $this->load->view('signup');
	    $this->load->view('footer');
	    
	} else {
	    
	    $this->load->model('model_users');
	    
	    if($query = $this->model_users->create_member()){
		
		$data['account_created'] = 'Your account has been created';
		
		$this->load->view('header');
		$this->load->view('login', $data);
		$this->load->view('footer');
		
	    } else {
		
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
		
	    }
	    
    
	}
    }
    
    public function check_if_email_exists($requested_email){
	
	$this->load->model('model_users');
	
	$email_available = $this->model_users->check_if_email_exists($requested_email);
	
	if ($email_available) {
	    
	    return TRUE;
	    
	} else {
	    
	    return FALSE;
	    
	}
	
    }

    
    public function validate_credentials(){		
		
	$this->load->library('form_validation');
	
	$this->form_validation->set_rules('email', 'trim|required|valid_email|xss_clean');
	$this->form_validation->set_rules('password', 'trim|required|min_length[4]|max_length[32]');
	
	$this->load->model('model_users');
	$query = $this->model_users->validate();
	
	if($query){
	    
	    $data = array(
		
		'email' => $this->input->post('email'),
		'is_logged_in' => true
		
	    );
	    
	    $this->session->set_userdata($data);
	    redirect('home');
	    
	} else {
	    
	    $this->index();
	    
	}
    }
    
    public function signout(){
	 
	$this->session->sess_destroy();
	
	redirect('home', 'refresh');
    }
}
