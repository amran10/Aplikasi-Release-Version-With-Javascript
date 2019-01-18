<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_wika extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('m_wika');
  }

  //Tampilan Awal APP
  public function index()
  {
  //query memanggil function tampil_data di models->m_wika
      $data['wika'] = $this->m_wika->tampil_data();
      $this->load->view('beranda',$data);    
  }

  //Tampilan Beranda
  public function create_versi()
  {
    if(isset($_POST['submit']))
    {
      $versi = $this->input->post('versi');
      $tanggal = $this->input->post('tanggal');
      $add_modul = $this->input->post('add_modul[]');
      $add_menu = $this->input->post('add_menu[]');
      $add_release = $this->input->post('add_release[]');
      //echo $versi;

            // foreach ($modul as $key => $value) {
            //         $tampil_modul .= $value.'; ';
            //         $tampil_menu .= $menu_versi[$key].'; ';
            //         $tampil_release .= $release[$key].'; ';
            //         }
      $data = array(
                  'versi' => $versi,
                  'tanggal' => $tanggal
                  // 'add_modul' => $add_modul,
                  // 'add_menu' => $add_menu,
                  // 'add_release' => $add_release
      );
  $this->m_wika->input_data('tbl_versi_modul', $data);

                foreach ($add_modul as $key => $value) {
                  $data_detail = array(
                  // 'versi' => $versi,
                  // 'tanggal' => $tanggal
                  'add_modul' => $value,
                  'add_menu' => $add_menu[$key],
                  'add_release' => $add_release[$key],
                  'm_versi'=>$versi
      );
  $this->m_wika->input_data('tbl_modul', $data_detail);
                    }

  } 
      redirect('c_wika');
  }
    //Tampilan Beranda
  public function create_modul()
  {
    if(isset($_POST['submit']))
    {
      $versi = $this->input->post('versi');
      $tanggal = $this->input->post('tanggal');
      $add_modul = $this->input->post('add_modul[]');
      $add_menu = $this->input->post('add_menu[]');
      $add_release = $this->input->post('add_release[]');
      $m_versi = $this->input->post('m_versi');
      //echo $versi;
                foreach ($add_modul as $key => $value) {
                  $data_detail = array(
                  'add_modul' => $value,
                  'add_menu' => $add_menu[$key],
                  'add_release' => $add_release[$key],
                  'm_versi'=>$m_versi
      );
  $this->m_wika->input_data1('tbl_modul', $data_detail);
                    }
  } 
      redirect('c_wika');
  }

  //Untuk menambah data versi
  public function versi()
  {
  $this->load->view('tambah_versi');
  }

  //Untuk menambah data versi
  public function modul_add()
  {
  $this->load->view('tambah_modul');
  }

  public function tmb_modul($versi)
  {
    $data=array(
    'title'=>'Edit Data',
    'data_cek'=>$this->m_wika->getData($versi),
    );
  
    $this->load->view('tambah_modul',$data);
  }
  //Untuk melakukan edit data modul berdasarkan versi
  public function edit($id_modul)
  {
    $data=array(
    'title'=>'Edit Data',
    'data_cek'=>$this->m_wika->getDataEdit($id_modul),
    );

    $this->load->view('edit_modul',$data);
  }

    //Untuk melakukan edit data modul berdasarkan versi
  public function edit1($versi)
  {
    $data=array(
    'title'=>'Edit Data',
    'data_cek'=>$this->m_wika->getDataEdit1($versi),
    );

    $this->load->view('edit_versi',$data);
  }

  function simpanedit($id){

        $data=array(
            'add_modul'=>$this->input->post('add_modul'),
            'add_menu'=>$this->input->post('add_menu'),
            'add_release'=>$this->input->post('add_release'),
        );
        
        $this->m_wika->update_data('tbl_modul',$data, $id);
        redirect("c_wika");
      
    }

    function simpanedit1($id){

        $data=array(
            'versi'=>$this->input->post('versi')

        );

        $this->m_wika->update_data1('tbl_versi_modul',$data, $id);
        
        $data2=array(
            'm_versi'=>$this->input->post('versi')
            
        );
        
        $this->m_wika->update_data2('tbl_modul',$data2, $id);
        redirect("c_wika");
      
    }
  
  //Hapus veris dan modul sekaligus
  public function hapus(){
   
    $versi['versi'] = $this->uri->segment(3);
    $m_versi['m_versi'] = $this->uri->segment(3);
   
    $this->m_wika->deleteData('tbl_versi_modul',$versi);
    $this->m_wika->deleteData('tbl_modul',$m_versi);

    redirect("c_wika");
  }

  public function hapus_modul(){
   
    $id_modul['id_modul'] = $this->uri->segment(3);
   
    $this->m_wika->deleteData12('tbl_modul',$id_modul);

    redirect("c_wika");
  }

  //menampilkan versi dan modul berdasarkan versi
  public function show_versi($versi)
  { 
        $data['wika'] = $this->m_wika->get_view_detail($versi); 
        $this->load->view('view_versi', $data); 
  }

 }
