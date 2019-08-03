<?php
  class crud_model extends CI_Model
  {
    public function __construct(){
      $this->load->database();
    }

    public function create_trailer(){
      $data = array(
        'titulo' => $this->input->post('titulo'),
        'genero' => $this->input->post('genero'),
        'director' => $this->input->post('director'),
        'estreno' => $this->input->post('cdate'),
        'portada' => null,
        'link' => $this->input->post('url'),
        'descripcion' => $this->input->post('descripcion'),
      );

      return $this->db->insert('peliculas', $data);
    }

    public function read_trailers($titulo = FALSE){
      if ($titulo === FALSE) {
        $query = $this->db->get('peliculas');
        return $query->result_array();
      }
      $query = $this->db->get_where('peliculas', array('titulo' => $titulo));
      return $query->row_array();
    }

  }

 ?>
