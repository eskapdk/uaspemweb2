<?php

class Komentar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('komentar_model');
    $this->load->model('article_model');
    $this->load->model('auth_model');
  }

  public function index()
  {
    $data['current_user'] = $this->auth_model->current_user();
    $data['komentars'] = $this->komentar_model->get_by_id($id);


    $this->load->view('user/dashboard/show/'.$slug, $komentars);

  }


  public function new()
  {
    $data['current_user'] = $this->auth_model->current_user();
    if ($this->input->method() === 'post') 
    {
      // TODO: Lakukan validasi sebelum menyimpan ke model

      // generate unique id and slug
      $id = uniqid('', true);
      $user =  $this->auth_model->current_user();
      $slug = $this->input->post('slug');
      
      $komentar = [
        'id_komen' => $id,
        'user' => $this->input->post('user'),
        'isi' => $this->input->post('komentar'),
        'article_id' => $this->input->post('id_konten')
        ];

      $saved = $this->komentar_model->insert($komentar);

      if ($saved) {
        $this->session->set_flashdata('message', 'Materi Berhasil Dibuat');
        return redirect('user/dashboard/show/'.$slug);
      }
    }
    $this->load->view('user/dashboard_view.php');

  }





  public function show1()
  {
    $data['current_user'] = $this->auth_model->current_user();
    $slug = html_escape($article->slug);

    $komentars = array('komentars' => $this->komentar_model->get_by_id()->result());
    $this->load->view('user/dashboard/show/'.$slug, $komentars);

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