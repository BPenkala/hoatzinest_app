<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home | HoatziNest';
		$data['rows'] = $this->project_model->get_projects();
		$members['rows'] = $this->model_users->get_members();
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('new_members', $members);//pass $data
		$this->load->view('footer');
	}
}

