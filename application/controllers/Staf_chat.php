<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_chat extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_chat');
    }

    
    public function index(){
        $id=$this->session->userdata('id');
        $data['data']=$this->m_chat->staff_load_data($id)->result();
        $this->load->view('staff/navbar');
        $this->load->view('staff/chat',$data);
        $this->load->view('staff/footer');
    }

    public function room_chat(){
        $this->load->view('staff/navbar');
        $this->load->view('staff/roomcht');
        $this->load->view('staff/footer');
    }

}
