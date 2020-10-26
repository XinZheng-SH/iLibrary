<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	// link to User modal
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}

	// redirect to the login page
	public function SignIn() {
		$this->load->view('templates/header');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
	}

	// redirect to the register page
	public function register_page() {
		$this->load->view('templates/header');
		$this->load->view('pages/register');
		$this->load->view('templates/footer');
	}

	// check form validation, if all pass, register new user account
	public function create() {
		// set rules for validation
		$this->form_validation->set_rules("lastName", "Your Name", "required|alpha|max_length[20]");
		$this->form_validation->set_rules("firstName", "Your Name", "required|alpha|max_length[20]");
		$this->form_validation->set_rules("username", "Username", "required|alpha_numeric|max_length[20]");
		$this->form_validation->set_rules("password", "Password", "required|alpha_numeric|min_length[8]");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('pages/register');
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');
			// check if username already exists
			$result = $this->Users_model->check_username($username);
			if ($result->num_rows() > 0) {
				$this->session->set_flashdata('err_msg','The username already exists');
				$this->load->view('templates/header');
				$this->load->view('pages/register');
				$this->load->view('templates/footer');
			} else {
				$this->Users_model->insert_user();
				echo "<script>alert('You have successfully register, please sign-in');document.location='../Login/SignIn'</script>";
			}
		}
	}

	// check if the user exists in the database
	public function auth() {
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$result = $this->Users_model->check_user($username, $password);

		// return 1 row if exists
		if ($result->num_rows() > 0) {
			$data = $result->row_array();
			$username = $data['username'];
			$password = $data['password'];

			$sessionData = array(
				'username' => $username,
				'password' => $password,
				'logged_in' => TRUE
			);
			// retain user login status
			$this->session->set_userdata($sessionData);

			redirect('Login/logged');

		} else {
		//go back to previous page (-1)
			echo "<script>alert('The username or password is not correct');history.go(-1);</script>";
		}
	}

	// pass user info to logged_header view to remind the user that he has already signed in.
	public function logged() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/logged_header', $data);
		$this->load->view('pages/homepage');
	}

	// logout, destroy session
	public function logout() {
		$this->session->sess_destroy();
		redirect('Pages/view');
	}

}
