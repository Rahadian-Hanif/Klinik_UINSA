<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('M_rekamedis');
    }

	
	public function register(){
		
		redirect('Auth/index',$data);
	}

}
