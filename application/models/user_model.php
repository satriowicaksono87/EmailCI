  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class user_model extends CI_Model{

    public function insert_user($data)
    {
      return $this->db->insert('user', $data);
    }
    public function verify_email($id)
    {
      $data = array('status' => 1);
      $this->db->where('md5(email)', $id);
      return $this->db->update('user', $data);
    }

  }
