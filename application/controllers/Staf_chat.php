<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_chat extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_chat');
        date_default_timezone_set("Asia/Jakarta");
    }

    
    public function index(){
        $id=$this->session->userdata('id');
        $data['data']=$this->m_chat->staff_load_data($id)->result();
        $data['content'] ='staff/null';
        $this->load->view('staff/navbar');
        $this->load->view('staff/chat',$data);
    }

    public function room_chat($nim){

        $id=$this->session->userdata('id');

        $data['data']=$this->m_chat->staff_load_data($id)->result();
        $data['content'] ='staff/roomcht';
        $data['isi'] =$this->m_chat->load_chat($nim,$id)->result();

        $this->session->set_userdata('nim_nip',$nim);

        $this->load->view('staff/navbar');
        $this->load->view('staff/chat',$data);
    }


    public function kirim()
    {
        $nim =  $this->session->userdata('nim_nip');
        $cht =  $this->input->post('cht');
        $pengirim= $this->session->userdata('nama');
        $waktu= date("Y-m-d H:i:s");
        $pegawai_id= $this->session->userdata('id');
        $this->m_chat->kirim_chat($nim,$cht,$pengirim,$waktu,$pegawai_id);
        redirect('Staf_chat/room_chat/'.$nim);
    }

}
