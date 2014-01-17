<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Success extends CI_Controller {

	public function index()
	{
                $data['title'] = "Let's Build | HoatziNest";
		$this->load->view('header', $data);
		$this->load->view('success');
		$this->load->view('footer');
	}
}