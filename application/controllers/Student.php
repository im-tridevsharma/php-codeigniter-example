<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->helper('encryption_helper');
	}

	public function login(){
		$data['page_title'] = "Student Login | Rameshwaram University";
		$data['page_description'] = "Login page for students.";
		$data['_token'] = encrypt(getUserIpAddr());
		$data['user_ip'] = decrypt($data['_token']);
		$data['page_name'] = 'student_login';

		$this->load->view("public/includes/header", $data);
		$this->load->view('student/login', $data);
		$this->load->view("public/includes/footer");
    }
    
    public function register(){
		$data['page_title'] = "Register | Rameshwaram University";
		$data['page_description'] = "Register page for students.";
		$data['_token'] = encrypt(getUserIpAddr());
		$data['user_ip'] = decrypt($data['_token']);
		$data['page_name'] = 'student_register';
		#get course
		$this->load->model("Course_Model","Course");
		$data['courses'] = $this->Course->get("course_id,course_name,course_details");

		$this->load->view("public/includes/header", $data);
		$this->load->view('student/register', $data);
		$this->load->view("public/includes/footer");
    }

    public function download_hall_ticket(){
		$data['page_title'] = "Download Hall Ticket | Rameshwaram University";
		$data['page_description'] = "Download Hall Ticket  page for students.";
		$data['_token'] = encrypt(getUserIpAddr());
		$data['user_ip'] = decrypt($data['_token']);
		$data['page_name'] = 'hall_ticket';

		$this->load->view("public/includes/header", $data);
		$this->load->view('student/hall_ticket', $data);
		$this->load->view("public/includes/footer");
    }
    
    public function result(){
		$data['page_title'] = "Download Result | Rameshwaram University";
		$data['page_description'] = "Download Result  page for students.";
		$data['_token'] = encrypt(getUserIpAddr());
		$data['user_ip'] = decrypt($data['_token']);
		$data['page_name'] = 'result';

		$this->load->view("public/includes/header", $data);
		$this->load->view('student/result', $data);
		$this->load->view("public/includes/footer");
	}
}
