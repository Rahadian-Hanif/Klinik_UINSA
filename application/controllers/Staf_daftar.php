<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_daftar extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_daftar');
        date_default_timezone_set("Asia/Jakarta");

    }

    public function index()
    { 	
    	$tanggal	= date("Y/m/d");
    	$data['data']=$this->m_daftar->load_data($tanggal);
        $this->load->view('staff/navbar');
        $this->load->view('staff/daftar',$data);
        $this->load->view('staff/footer');
    }

    public function daftar()
    {  
    	$nim		= $this->input->post('nim',TRUE);
        $validate   = $this->m_daftar->validate($nim);
        if($validate->num_rows() > 0){
            $pegawai_id  = $this->session->userdata('id');
            $tanggal = $this->input->post('tanggal');
            $antrian = random_string('alnum',10);
            $jam     = date("H:i:s");
            $status  = "Menunggu";
            $this->m_daftar->daftar($nim,$pegawai_id,date("Y/m/d",strtotime($tanggal)),$antrian,$jam,$status);
            redirect('Staf_daftar');
            }else{
                $this->session->set_flashdata('error','NIM/NIP tidak ditemukan');
                // tidak ditemukan atau kosong
                redirect('Staf_daftar');             
             }
    	
    }
}
