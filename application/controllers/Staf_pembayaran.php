<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_pembayaran extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_pembayaran');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $tanggal    = date("Y/m/d");
        $data['data']=$this->m_pembayaran->pasien($tanggal)->result();
        $this->load->view('staff/navbar');
        $this->load->view('staff/pembayaran',$data);
        $this->load->view('staff/footer');
    }
}
