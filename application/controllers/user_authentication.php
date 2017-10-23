<?php
Class User_Authentication extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('login_database');
	}

	public function index() {
		if($this->session->has_userdata('logged_in')){
				redirect('home/index' );}
			else if($this->session->has_userdata('admin')){
				redirect('home/index' );}
		else $this->load->view('login_form');
	}

	public function user_registration_show() {
		if($this->session->has_userdata('logged_in')){
				redirect('home/index' );}
			else if($this->session->has_userdata('admin')){
				redirect('home/index' );}
		else $this->load->view('registration_form');
	}

	public function new_user_registration() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
		} else {
			$data = array(
			'user_name' => $this->input->post('username'),
			'user_email' => $this->input->post('email_value'),
			'user_password' => md5($this->input->post('password'))
			);
			$result = $this->login_database->registration_insert($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successfully !';
				$this->load->view('login_form', $data);
			} else {
				$data['message_display'] = 'Username already exist!';
				$this->load->view('registration_form', $data);
			}
		}
	}

	public function user_login_process() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			if($this->session->has_userdata('logged_in')){
				redirect('home/index' );}
			else if($this->session->has_userdata('admin')){
				redirect('home/index' );}else{
				$this->load->view('login_form');
			}

		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = array(
			'username' => $username,
			'password' => md5($password)
			);
			$result = $this->login_database->login($data);

			if ($username == 'admin' && $password == 'admin'){
				$this->session->set_userdata('admin', $username);
				redirect('home/admin' );}

			if ($result == TRUE) {
				$username = $this->input->post('username');
				$result = $this->login_database->read_user_information($username);
				
                                    $session_data = array(
                                    'username' => $result[0]->user_name,
                                    'email' => $result[0]->user_email,
                                    );
                                $this->session->set_userdata('logged_in', $session_data);
				redirect('home/index' );} 
                                else {
				$data = array(
				'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('login_form', $data);
			}
		}
	}

	public function logout() {
            $sess_array = array('username' => '');
            $this->session->unset_userdata('logged_in', $sess_array);
            $this->session->unset_userdata('admin', $sess_array);
            $this->session->sess_destroy();
            $data['message_display'] = 'Successfully Logout';
            redirect('home/index');}
}

?>