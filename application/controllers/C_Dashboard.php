<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();

    }

    public function index()
    {
        $this->load->view('staff/login');
    }

    public function tes()
    {
        $this->load->view('staff/navbar');
        $this->load->view('staff/staff/dashboard');
        $this->load->view('staff/footer');
    }
}
