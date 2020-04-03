<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datauser extends CI_Controller{

  public function __construct(){
    parent::__construct();

    $this->load->model('Datauser_model');
  }
  public function index(){
    $data['user'] = $this->Datauser_model->view_row();
    $this->load->view('preview',$data);
  }
  public function cetak(){
    ob_start();
    $data['siswa'] = $this->Datauser_model->view_row();
    $this->load->view('print', $data);
    $html = ob_get_contents();
    ob_end_clean();

    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('p', 'A4', 'en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Siswa.pdf', 'D');

  }


}
