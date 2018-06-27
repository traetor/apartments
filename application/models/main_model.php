<?php
class main_model extends CI_Model 
{
  public $itemsPerPage=10;

  function __construct() 
  {
    parent::__construct();
  }

  function totalRows()
  {
    return $this->db->count_all('aparts');
  }

  function get_aparts($page)
  {
    $offset = $page * $this->itemsPerPage;
    $query = $this->db->query("select * from aparts limit $offset, $this->itemsPerPage");
    return $query->result_array();
  }
}