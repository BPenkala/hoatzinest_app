<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Contact | HoatziNest';
		$this->load->view('header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
		
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required|max_length[40]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[40]');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|xss_clean|');
	}
	
	public function sent()
	{
		
		$data['title'] = 'Contact | HoatziNest';
		$this->load->view('header', $data);
		$this->load->view('sent');
		$this->load->view('footer');
		
		
	}
}

