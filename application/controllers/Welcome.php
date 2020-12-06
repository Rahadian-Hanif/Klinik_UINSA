<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('pasien/nav_home');
		$this->load->view('pasien/home');
		$this->load->view('pasien/footer_home');
	}

	public function daftar()
    {  
    	date_default_timezone_set("Asia/Jakarta");
    	$nim		= $this->input->post('nim');
    	$pegawai_id	= null;
    	$tanggal	= $this->input->post('tanggal');
    	$antrian	= random_string('alnum',10);
    	$jam		= date("H:i:s");

    	$this->m_daftar->daftar($nim,$pegawai_id,date("Y/m/d",strtotime($tanggal)),$antrian,$jam);
    	redirect('Staf_daftar');
    }

	public function about()
	{
		$this->load->view('pasien/nav_home');
		$this->load->view('pasien/about');
		$this->load->view('pasien/footer_home');
	}
	public function Profile()
	{
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/profile');
		$this->load->view('pasien/footer_profile');
	}
	public function konsultasi()
	{
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/konsultasi');
		$this->load->view('pasien/footer_profile');
	}

	public function chat()
	{
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/chat');
		$this->load->view('pasien/footer_profile');
	}
}
