<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_daftar extends CI_Controller {

	function __construct(){
        parent::__construct();

    }

    public function Daftar()
    {
        $this->load->view('staff/navbar');
        $this->load->view('staff/daftar');
        $this->load->view('staff/footer');
    }

    public function Daftar()
    {  
    	$nim		= $this->input->post('nim');
    	$pegawai_id	= $this->input->post('tanggal');
    	$tanggal	= date("Y/m/d");
    	$antrian	= random_string('alnum',10);
    	$jam		= 

        $this->load->view('staff/navbar');
        $this->load->view('staff/daftar');
        $this->load->view('staff/footer');
    }
}
