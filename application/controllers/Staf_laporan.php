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
        $bulan_ini      = date("Y/m");
        $thn_ini        = date("Y");
        $data['bulan_ini']          =$this->m_laporan->bulan_ini($bulan_ini)->result();
        $data['pemasukan_bln_ini']  =$this->m_laporan->pemasukan($bulan_ini)->result();
        $data['pemasukan_thn_ini']  =$this->m_laporan->pemasukan_tahunan($thn_ini)->result();
        $data['thn_ini']            =$this->m_laporan->thn_ini($thn_ini)->result();
        $this->load->view('staff/navbar');
        $this->load->view('staff/laporan',$data);
        $this->load->view('staff/footer');
    }

    public function list()
    {
        $bulan_ini = date("Y/m");
        $tabel     =$this->m_laporan->tabel($bulan_ini)->result();
        echo json_encode($tabel);
    }

}
