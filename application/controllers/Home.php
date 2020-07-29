<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('encryption_helper');
	}

	public function index()
	{
		$data['page_title'] = "Home | Rameshwaram University";
		$data['page_description'] = "Rameshwaram University provides you easy way to learn and live.";
		$data['_token'] = encrypt(getUserIpAddr());
		$data['user_ip'] = decrypt($data['_token']);
		$data['page_name'] = 'home';

		$this->load->view("public/includes/header", $data);
		$this->load->view('public/home', $data);
		$this->load->view("public/includes/footer");
	}

	public function home(){
		$data['page_title'] = "Home | Rameshwaram University";
		$data['page_description'] = "Rameshwaram University provides you easy way to learn and live.";
		$data['_token'] = encrypt(getUserIpAddr());
		$data['user_ip'] = decrypt($data['_token']);
		$data['page_name'] = 'home';

		$this->load->view("public/includes/header", $data);
		$this->load->view('public/home', $data);
		$this->load->view("public/includes/footer");
	}

	public function courses(){
		$data['page_title'] = "Courses | Rameshwaram University";
		$data['page_description'] = "Courses offered by Rameshwaram University";
		$data['_token'] = encrypt(getUserIpAddr());
		$data['user_ip'] = decrypt($data['_token']);
		$data['page_name'] = 'courses';

		$this->load->view("public/includes/header", $data);
		$this->load->view('public/courses', $data);
		$this->load->view("public/includes/footer");
	}
}
