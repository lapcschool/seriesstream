<?php
  class User_model extends CI_Model
  {
    public function __construct(){
        $this->load->database();
    }

    public function login($username, $password){
      $this->db->where('username', $username);
      $this->db->where('password', $password);

      $result = $this->db->get('admin');

      if ($result->num_rows() == 1) {
        return $result->row(0)->id;
      }else {
        return false;
      }
    }

  }


 ?>
