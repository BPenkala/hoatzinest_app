<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct(){
	
		parent::__construct();
	
	}

	public function index()
	{
		if ($this->session->userdata('is_logged_in') == TRUE){
			
			$data['title'] = 'Project | HoatziNest';
			$this->load->view('header', $data);
			$this->load->view('about');
			$this->load->view('footer');
			
		} else {
			
			redirect('login');
			
		}

	}
	
	public function details(){
	
	
		if ($this->session->userdata('is_logged_in') == TRUE){
			
			$data['rows'] = $this->project_model->get_project_details($this->uri->segment(3));
			$data['title'] = 'Project Details | HoatziNest';
			$this->load->view('header', $data);
			$this->load->view('project', $data);
			$this->load->view('footer');
			
		} else {
			
			redirect('login');
			
		}
	

	}
}

