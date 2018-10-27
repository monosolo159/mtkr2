<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer_model extends CI_Model
{

  public function lecturer_list($id) {
    $query =  $this->db
    ->where('recentwork_id',$id)
    ->order_by('lecturer_order','asc')
    ->get('lecturer')
    ->result_array();
    return $query;
  }


}
