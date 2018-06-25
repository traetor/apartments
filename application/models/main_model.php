<?php
class main_model extends CI_Model {
  public $itemsPerPage=3;
  function __construct() {
    parent::__construct();
  }
//    function get_page($page){
//        $offset=$page*$this->itemsPerPage;
//        $query=$this->db->query("select * from store_items limit $offset, $this->itemsPerPage");
//        return $query->result_array();
//    }
  // function get_news(){
  //   $offset=$page*$this->itemsPerPage;
  //   $query = $this->db->query("select * from news order by news_id DESC");
  //   //$query = $this->db->get('news');
  //   return $query->result_array();
  // }
  // function get_news_where($what){
  //   $query = $this->db->query("select * from news where news_id='$what'");
  //   return $query->result_array();
  // }
//    function get_one_category($categories, $page){
//        $offset=$page*$this->itemsPerPage;
//        $query=$this->db->query("select * from store_items where category_name='$categories' limit $offset, $this->itemsPerPage");
//        return $query->result_array();
//    }
//    function totalRowsInCategory($categories){
//            $query=$this->db->query("Select count(*) as rows from store_items where category_name='$categories'");
//            return $query->result_array()[0]['rows'];
//        }
//    public function insert_customer($data){
//        $this->db->insert('users', $data);
//        $id = $this->db->insert_id();
//        return (isset($id)) ? $id : FALSE;
//    }
//    function get_product_where($what){
//        $query = $this->db->query("select * from store_items where id='$what'");
//        return $query->result_array();
//    }
//    function update_product($what, $product){
//        $this->db->where('id', $what);
//        $this->db->update('store_items', $product);
//    }
//    function insert_item($what){
//        $this->db->insert('store_items', $what);
//    }
//    function delete_item($what){
//        $this->db->where('id', $what);
//        $this->db->delete('store_items');
//    }
}