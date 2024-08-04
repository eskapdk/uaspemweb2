<?php

class Post extends CI_Controller
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
		$data['articles'] = $this->article_model->get();
		if(count($data['articles']) <= 0){
			$this->load->view('admin/post_empty.php', $data);
		} else {
			$this->load->view('admin/post_list.php', $data);
		}
	}

	public function new()
	{
		$data['current_user'] = $this->auth_model->current_user();
		if ($this->input->method() === 'post') {
			// TODO: Lakukan validasi sebelum menyimpan ke model

			// generate unique id and slug
			$id = uniqid('', true);
			$slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;

			$article = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft'),
				'created_by' => $this->auth_model->current_user()->username
			];

			$saved = $this->article_model->insert($article);

			if ($saved) {
				$this->session->set_flashdata('message', 'Berhasil Membuat Materi');
				return redirect('admin/post');
			}
		}

		$this->load->view('admin/post_new_form.php', $data);
	}

	public function edit($id = null)
	{
		$data['current_user'] = $this->auth_model->current_user();
		$data['article'] = $this->article_model->find($id);

		if (!$data['article'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			// TODO: lakukan validasi data sebelum simpan ke model
			$article = [
				'id' => $id,
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'draft' => $this->input->post('draft')
			];
			$updated = $this->article_model->update($article);
			if ($updated) {
				$this->session->set_flashdata('message', 'Berhasil Merubah Materi');
				redirect('admin/post');
			}
		}

		$this->load->view('admin/post_edit_form.php', $data);
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->article_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Berhasil Hapus Materi');
			redirect('admin/post');
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
    $this->load->view('admin/post_view.php', $data);
 	}
}