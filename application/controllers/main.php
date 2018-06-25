<?php
class main extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('main_model');
    $this->load->library('pagination');
    $this->load->library('javascript');
    $this->load->helper('url');
  }
  function index($l='home_page', $category='1', $page=0){
    //error_reporting(E_ALL ^ E_NOTICE);
    //$data['who_is_logged'] = $this->load->view('commando/who_is_logged', '', TRUE); 
    //$data['categories'] = $this->commando_model->get_all_categories();
   // $data['total_rows'] = $this->commando_model->totalRowsInCategory($categories);
   // $data['total_rows_all'] = $this->commando_model->totalRows();
   // $data['items_per_page'] = $this->commando_model->itemsPerPage;
   // if($categories=='all'){
   //     $data['store_items'] = $this->commando_model->get_page($page);
   // }else{
   //     $data['store_items'] = $this->commando_model->get_one_category($categories, $page);
   // }
   // $data['categoriesID'] = $categories;
    $data['news'] = $this->main_model->get_news();
    $data['news_where'] = $this->main_model->get_news_where($category);
    $data['navbar'] = 'bookmark/navbar';
    $data['who'] = 'bookmark/who';
    $data['footer'] = 'bookmark/footer';
    $data['header'] = 'bookmark/header';
    $admin = 'admin';
    if($this->session->userdata('login')==$admin) {
       redirect('admin');
    }elseif ($this->session->userdata('zalogowany')) {
       redirect('user');
    }else {
        $this->load->view('index', $data);
    }
  }
}
