<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_pasien');
    }

	public function index()
	{
		$nim = $this->session->userdata('nim_nip');
		$data['data']=$this->m_pasien->riwayat_antrian($nim)->result();
		$this->load->view('pasien/nav_profile');
        $this->load->view('pasien/profile',$data);
        $this->load->view('pasien/footer_profile');
	}

		public function ambil_antrian()
	{
		date_default_timezone_set("Asia/Jakarta");
    	$nim 	= $this->input->post('nim');
        $tanggal = $this->input->post('tanggal');
        $antrian = random_string('alnum',10);
        $jam     = date("H:i:s");
		$this->m_pasien->daftar($nim,date("Y/m/d",strtotime($tanggal)),$antrian,$jam);
		redirect('Profile');
	}

}
