<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_chat');
    }

	
	public function index(){
		$data['data']=$this->m_chat->load_data();
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/konsultasi',$data);
		$this->load->view('pasien/footer_profile');
	}

		public function room_chat($id)
	{
		$data['data']=$this->m_chat->info_dokter($id)->result();
		$this->session->set_userdata('pegawai_id',$id);

		$nim 	=$this->session->userdata('nim_nip');
		$data['data2']=$this->m_chat->load_chat($nim,$id)->result();

		$this->load->view('pasien/chat',$data);
		$this->load->view('pasien/footer_profile');
	}

	public function kirim()
	{
		$nim =	$this->session->userdata('nim_nip');
		$cht =	$this->input->post('cht');
		$pengirim= $this->session->userdata('nama');
		$waktu=	date("Y-m-d H:i:s");
		$pegawai_id= $this->session->userdata('pegawai_id');
		$this->m_chat->kirim_chat($nim,$cht,$pengirim,$waktu,$pegawai_id);
		redirect('Chat/room_chat/'.$pegawai_id);
	}



}
