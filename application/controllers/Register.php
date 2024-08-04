<?php

class Register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Register_model');
  }

  public function index()
  {
    $this->load->view('Register');
  }

  public function insert()
  {
  	if ($this->input->method() === 'post') {
	
	// generate unique id and slug
	$id = uniqid('', true);
	$register = [
				'id' => $id,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'role' => '2'
			];

			$saved = $this->Register_model->insert($register);

			if ($saved) {
				$this->session->set_flashdata('message', 'Berhasil Mendaftar');
				return redirect('auth/login');
			}
		}
  }




}
