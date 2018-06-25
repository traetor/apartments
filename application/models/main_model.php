<?php
class main_model extends CI_Model 
{
  public $itemsPerPage=3;
  function __construct() 
  {
    parent::__construct();
  }
  function get_aparts()
  {
    $query = $this->db->query("select * from aparts");
    return $query->result_array();
  }
}