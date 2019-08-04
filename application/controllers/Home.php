<?php
class Home extends CI_Controller
{
  public function view($page = 'main-home')
  {
    if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
      show_404();
    }

    $data['title'] = ucfirst($page);

    if($page === 'main-home'){
      $this->load->view('templates/header', $data);
      $this->load->view('pages/' . $page, $data);
      $this->load->view('templates/footer', $data);

    } else if($page === 'trailers'){
      $this->load->view('pages/' . $page, $data);
    }
  }
}
