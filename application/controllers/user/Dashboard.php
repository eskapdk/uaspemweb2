<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$data['articles'] = $this->article_model->get_published();
		if(count($data['articles']) <= 0)
		{
		$this->load->view('user/post_empty.php', $data);
		} else {
		$this->load->view('user/dashboard.php', $data);
		}
	}

	public function show($slug = null)
 	{
    // jika gak ada slug di URL tampilkan 404
    $data['current_user'] = $this->auth_model->current_user();
    if (!$slug) {
      show_404();
    }

    // ambil artikel dengan slug yang diberikan
    $data['article'] = $this->article_model->find_by_slug($slug);

    // jika artikel tidak ditemuakn di database tampilkan 404
    if (!$data['article']) {
      show_404();
    }

    // tampilkan artikel
    $this->load->view('user/dashboard_view.php', $data);
 	}
}