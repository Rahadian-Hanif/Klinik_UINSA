<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_laporan extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_laporan');

    }

    public function index()
    {
        $bulan_ini        = date("Y/m");
        $data['bulan_ini']=$this->m_laporan->bulan_ini($bulan_ini)->result();
        $this->load->view('staff/navbar');
        $this->load->view('staff/laporan',$data);
        $this->load->view('staff/footer');
    }
}
