<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_rekam_medis extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_rekamedis');

    }

    public function index()
    {
        $data['data']=$this->m_rekamedis->load_data();
        $this->load->view('staff/navbar');
        $this->load->view('staff/rekam_medis',$data);
        $this->load->view('staff/footer');
    }

    public function view($id)
    {
        $data['data']=$this->m_rekamedis->view($id)->result();
        $data['data2']=$this->m_rekamedis->view_bio($id)->result();
        $this->session->set_userdata('nim',$id);
        $this->load->view('staff/navbar');
        $this->load->view('staff/view',$data);
        $this->load->view('staff/footer');
    }

    public function tambah()
    {
        $nim        = $this->session->userdata('nim');
        $penanganan = $this->input->post('penanganan');
        $tanggal    = $this->input->post('tanggal');
        $diagnosis  = $this->input->post('diagnosis');
        $this->m_rekamedis->tambah($nim,$penanganan,date("Y/m/d",strtotime($tanggal)),$diagnosis);
        redirect('Staf_rekam_medis/view/'.$nim);
    }

    public function hapus($id)
    {
        $this->m_rekamedis->hapus($id);
        $nim        = $this->session->userdata('nim');
        redirect('Staf_rekam_medis/view/'.$nim);

    }

    public function chat()
    {
        $this->load->view('staff/navbar');
        $this->load->view('staff/chat');
        $this->load->view('staff/footer');
    }
}
