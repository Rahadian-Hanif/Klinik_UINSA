<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_daftar extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_daftar');

    }

    public function index()
    {
    	date_default_timezone_set("Asia/Jakarta");
    	$tanggal	= date("Y/m/d");
    	$data['data']=$this->m_daftar->load_data($tanggal);
        $this->load->view('staff/navbar');
        $this->load->view('staff/daftar',$data);
        $this->load->view('staff/footer');
    }

    public function daftar()
    {  
    	date_default_timezone_set("Asia/Jakarta");
    	$nim		= $this->input->post('nim');
    	$pegawai_id	= $this->session->userdata('id');
    	$tanggal	= $this->input->post('tanggal');
    	$antrian	= random_string('alnum',10);
    	$jam		= date("H:i:s");

    	$this->m_daftar->daftar($nim,$pegawai_id,date("Y/m/d",strtotime($tanggal)),$antrian,$jam);
    	redirect('Staf_daftar');
    }
}
