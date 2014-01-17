<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
                
                if ($this->session->userdata('is_logged_in') == TRUE){
		    $data['rows'] = $this->project_model->get_all_projects();
                    $data['title'] = 'Open Projects | HoatziNest';
                    $this->load->view('header', $data);
                    $this->load->view('projects', $data);
                    $this->load->view('footer');	
			
		} else {
			
			redirect('login');
			
		}
                
                

	}
}