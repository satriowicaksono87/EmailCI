<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datauser_model extends CI_Model{
  public function view(){
    return $this->db->get('user')->result();
  }

  public function view_row(){
    return $this->db->get('user')->result();
  }

}
