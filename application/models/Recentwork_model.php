<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recentwork_model extends CI_Model
{

  public function recentwork_portal() {
    $query =  $this->db
    ->order_by('recentwork_order','asc')
    ->where('recentwork_show',1)
    ->limit(9)
    ->get('recentwork')
    ->result_array();
    return $query;
  }

  public function recentwork_list() {
    $query =  $this->db
    ->order_by('recentwork_order','asc')
    ->where('recentwork_show',1)
    ->get('recentwork')
    ->result_array();
    return $query;
  }

  public function recentwork_detail($id) {
    $query =  $this->db
    ->where('recentwork_id',$id)
    ->get('recentwork')
    ->result_array();
    return $query;
  }

  public function pic_group_list($id) {
    $query =  $this->db
    ->where('recentwork_id',$id)
    ->get('pic_group')
    ->result_array();
    return $query;
  }

  public function pic_list($id) {
    $query =  $this->db
    ->where('recentwork_id',$id)
    ->get('pic')
    ->result_array();
    return $query;
  }































  public function enableDeliveryType($input) {
    $id = $input['delivery_id'];
    unset($input['delivery_id']);
    $this->db
    ->where('delivery_id',$id)
    ->update('delivery',$input);
  }

  public function deliveryTypeSelect($delivery_id) {
    $query =  $this->db
    ->where('delivery_id',$delivery_id)
    ->get('delivery')
    ->result_array();
    return $query;
  }

  public function deliveryTypeEdit($input) {
    $id = $input['delivery_id'];
    unset($input['delivery_id']);
    $this->db
    ->where('delivery_id',$id)
    ->update('delivery',$input);
  }

  public function login($data)
  {
    $query = $this->db
    ->where('admin_username', $data['admin_username'])
    ->where('admin_password', md5($data['admin_password']))
    ->get('admin')
    ->result_array();
    return $query;
  }
}
