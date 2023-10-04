<?php namespace App\Models;
  use CodeIgniter\Model;

  class Users extends Model {
    public function getUser( $data ) {
      $Users = $this->db->table('tblUsers');
      $Users->where($data);
      return $Users->get()->getResultArray();
    }
  }