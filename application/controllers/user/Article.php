<?php

class Article extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('article_model');
  }

  public function index()
  {
    // ambil artikel yang statusnya bukan draft
    $data['articles'] = $this->article_model->get_published();

    if (count($data['articles']) > 0) {
      // kirim data artikel ke view
      $this->load->view('articles/list_article.php', $data);
    } else {
      // kalau gak ada artikel, tampilkan view ini
      $this->load->view('articles/empty_article.php');
    }
  }

  public function show($slug = null)
  {
    // jika gak ada slug di URL tampilkan 404
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
    $this->load->view('user/post_view.php', $data);
  }
}