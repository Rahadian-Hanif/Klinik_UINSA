<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_staff');

    }

    public function index()
    {
    	$tanggal	= date("Y/m/d");
    	$data['data']=$this->m_staff->load_data($tanggal)->result();
        $data['menunggu']=$this->m_staff->count_tunggu($tanggal)->result();
        $data['selesai']=$this->m_staff->count_selesai($tanggal)->result();
        $data['antrian']=$this->m_staff->antrian_sekarang($tanggal)->result();

        $this->load->view('staff/navbar');
        $this->load->view('staff/dashboard',$data);
        $this->load->view('staff/footer');
    }

    public function update()
    {
        $tanggal  = date("Y/m/d");
        $no=$this->session->userdata('no');
        var_dump($no);
        $this->m_staff->update($no,$tanggal);
        $this->session->unset_userdata('no');
        redirect('C_Dashboard');
    }
}
