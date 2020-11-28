<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_rekam_medis extends CI_Controller {

	function __construct(){
        parent::__construct();

    }

    public function rekam_medis()
    {
        $this->load->view('staff/navbar');
        $this->load->view('staff/rekam_medis');
        $this->load->view('staff/footer');
    }
    public function view()
    {
        $this->load->view('staff/navbar');
        $this->load->view('staff/view');
        $this->load->view('staff/footer');
    }
    public function chat()
    {
        $this->load->view('staff/navbar');
        $this->load->view('staff/chat');
        $this->load->view('staff/footer');
    }
}
