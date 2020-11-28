<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('staff');
    }

	//Register
	public function register(){
		$nama = $this->input->post('Nama',TRUE);
        $email = $this->input->post('Email',TRUE);
        $password = $this->input->post('password',TRUE);
		$this->grafik_m->register($email,$password,$nama);
		redirect('Auth/index');
	}

}
