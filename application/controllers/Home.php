<?php
  class Home extends CI_Controller
  {
    public function view($page = 'main')
    {
      if (!file_exists(APPPATH.'views/pages/'.$page.".php")) {
        show_404();
      }
      $this->load->view('pages/'.$page);
    }

    public function admin($page)
    {
      if (!file_exists(APPPATH.'views/admin/'.$page.".php")) {
        show_404();
      }
      if ($page === 'devlegend-admin') {
        $this->load->view('admin/'.$page);
      }else {
        $this->load->view('templates/header-admin');
        $this->load->view('admin/'.$page);
        $this->load->view('templates/footer-admin');
      }

    }
  }

 ?>
