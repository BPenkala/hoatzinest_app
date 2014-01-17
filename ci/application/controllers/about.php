<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = 'About | HoatziNest';
		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}
}

