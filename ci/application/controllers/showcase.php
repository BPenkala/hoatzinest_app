<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Showcase extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Showcase | HoatziNest';
		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('showcase');
		$this->load->view('footer');
	}
}

