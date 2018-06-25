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
    $data['aparts'] = $this->main_model->get_aparts();
    $data['header'] = 'bookmark/header';
    $data['navbar'] = 'bookmark/navbar';
    $data['availability'] = 'bookmark/availability';
    $data['apartment_projections'] = 'bookmark/apartment_projections';
    $data['contact'] = 'bookmark/contact';
    $this->load->view('index', $data);
  }
}
