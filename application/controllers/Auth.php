<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		if ($this->session->userdata('id')) {
			return redirect(base_url('admin/dashboard'));
		}

		$this->validation->set_rules('username', 'username', 'required');
		$this->validation->set_rules('password', 'password', 'required');

		if ($this->validation->run()) {
			$this->load->model('User', 'user');

			$user = $this->user->login();

			if ($user) {
				$this->session->set_userdata('id', $user->id);

				return redirect(base_url('admin/dashboard'));
			} else {
				return redirect(base_url('login'));
			}
		} else {
			return $this->load->view('layouts/auth');	
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		return redirect(base_url('login'));
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */