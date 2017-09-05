<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct() {
	  parent::__construct();
	  $this->load->model('home_model');
	  $this->load->helper('form');
	  $this->load->library('form_validation');
	  $this->load->library('session');
	 }
	 
	//Home 
	public function index() {
		$this->load->view('header');
		$this->load->view('home_index');
		$this->load->view('footer');
	}
	//About
	public function about()	{
		$this->load->view('header');
		$page = $this->home_model->get_static_pages(1);
		if(!empty($page)){
			$this->load->view('home_about', $page);
		}else{
			redirect ('/');
		}
		$this->load->view('footer');
	}
	//Services
	public function services() {
		$this->load->view('header');
		$page = $this->home_model->get_static_pages(2);
		if(!empty($page)){
			$this->load->view('home_about', $page);
		}else{
			redirect ('/');
		}
		$this->load->view('footer');
	}
	//Contact Us
	public function contact() {
		$this->load->view('header');
		$page = $this->home_model->get_static_pages(3);
		if(!empty($page)){
			$this->load->view('home_contact', $page);
		}else{
			redirect ('/');
		}
		$this->load->view('footer');
	}	
	//login 
	public function login() {
		if(isset($this->session->userdata['logged_in'])){
			redirect ('/admin');
		}
		$this->load->view('header');
		$this->load->view('home_login');
	}	
	// User login process
	public function user_login() {		
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		
		$result = $this->home_model->login($data);		
		if ($result == TRUE) {
			$username = $this->input->post('username');
			$result = $this->home_model->get_user_details($username);
			if ($result != false) {
				$session_data = array(
					'username' => $result['user_name'],
					'email' => $result['user_email'],
				);
				// Add user data in session
				$this->session->set_userdata('logged_in', $session_data);
				redirect ('/admin');
			}
		} else {
			$data = array(
				'error_message' => 'Invalid Username or Password'
			);
			$this->load->view('home_index', $data);
		}
	}
	
	// Admin page after login
	public function admin() {
		
		if (!isset($this->session->userdata['logged_in'])) {
			redirect ('/');
		}
		$this->load->view('header');
		$this->load->view('home_admin');
		$this->load->view('footer');
	}

	// Logout 
	public function logout() {
		// Removing session data
		$sess_array = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		redirect ('/');
	}
}
