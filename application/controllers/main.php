<?php
class main extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('main_model');
    $this->load->library('pagination');
    $this->load->library('javascript');
    $this->load->helper('url');
  }
  function index($page=0){
    $data['total_rows'] = $this->main_model->totalRows();
    $data['items_per_page'] = $this->main_model->itemsPerPage;
    $data['aparts'] = $this->main_model->get_aparts($page);
    $data['header'] = 'bookmark/header';
    $data['navbar'] = 'bookmark/navbar';
    $data['availability'] = 'bookmark/availability';
    $data['apartment_projections'] = 'bookmark/apartment_projections';
    $data['contact'] = 'bookmark/contact';
    $this->load->view('index', $data);
  }
}
