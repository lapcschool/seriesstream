<?php

class Crud extends CI_Controller
{
  public function create($page = ''){
    if ($page != 'devlegend-admin' && !$this->session->userdata('logged_in')) {
      redirect('Home/admin/devlegend-admin');
    }

    $this->form_validation->set_rules('titulo', 'Titulo', 'required');
    $this->form_validation->set_rules('genero', 'Genero', 'required');
    $this->form_validation->set_rules('director', 'Director', 'required');
    $this->form_validation->set_rules('cdate', 'Cdate', 'required');
    $this->form_validation->set_rules('url', 'Url', 'required');
    $this->form_validation->set_rules('descripcion', 'Descripcion', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header-admin');
      $this->load->view('admin/admin-create');
      $this->load->view('templates/footer-admin');
    }else{
      $this->crud_model->create_trailer();
      $this->session->set_flashdata('creation_success','Los datos de la pelicula fueron insertados');
      redirect('crud/create/admin-create');
    }

  }

  public function read($page = ''){
    if ($page != 'devlegend-admin' && !$this->session->userdata('logged_in')) {
      redirect('Home/admin/devlegend-admin');
    }
    $data['trailer'] = $this->crud_model->read_trailers($page);

    $this->load->view('admin/header-admin');
    $this->load->view();
    $this->load->view('admin/footer-admin');

  }

}


 ?>
