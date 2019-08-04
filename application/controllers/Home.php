<?php
  class Home extends CI_Controller
  {
    public function view($page = 'main')
    {
      if (!file_exists(APPPATH.'views/pages/'.$page.".php")) {
        show_404();
      }

      $this->load->model('crud_model');
      $trailers = $this->crud_model->get_trailer();

      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, compact("trailers"));
      $this->load->view('templates/footer');
    }

    public function admin($page)
    {
      if ($page != 'devlegend-admin' && !$this->session->userdata('logged_in')) {
        redirect('Home/admin/devlegend-admin');
      }
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

    public function trailers(){
      $datos['title'] = "TRAILERS";
      $this->load->view('pages/trailers', $datos);
    }
    public function nosotros(){
      $datos['title'] = "NOSOTROS";
      $this->load->view('pages/nosotros', $datos);
      $this->load->view('templates/footer');
    }

    public function contacto(){
      $datos['title'] = "CONTACTO";
      $this->load->view('pages/contacto', $datos);
      $this->load->view('templates/footer');
    }

  }

 ?>
