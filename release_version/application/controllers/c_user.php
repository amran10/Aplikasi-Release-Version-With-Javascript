<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_user extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('m_versi');
  }

  //Tampilan Awal APP
  public function index()
  {
  //query memanggil function tampil_data di models->m_versi
      $data['persi'] = $this->m_versi->tampil_data();
      $this->load->view('tampilan_user',$data);    
  }


 }
