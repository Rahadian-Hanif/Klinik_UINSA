<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_chat');
        date_default_timezone_set("Asia/Jakarta");
    }

	
	public function index(){
		$data['data']=$this->m_chat->load_data();
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/konsultasi',$data);
		$this->load->view('pasien/footer_profile');
	}


	 public function room_chat($id){

	 	$data['data']=$this->m_chat->info_dokter($id)->result();
	 	$data['pegawai_id'] = $id;

        $data['isi'] =$this->getChat($id);
        $this->session->set_userdata('pegawai_id',$id);

       $this->load->view('pasien/chat',$data);
		$this->load->view('pasien/footer_profile');
    }

    public function getChat($id, $lastID = -1, $result =  false){

        $nim 	=$this->session->userdata('nim_nip');
        $data = $this->m_chat->load_chat($nim,$id, $lastID)->result();
        
        for($i = 0; $i < count($data); $i++){
            $pengirim = $data[$i]->pengirim;
            if($pengirim == $this->session->userdata('nama')){
                $data[$i]->class = "sent";
            }
            else{
                $data[$i]->class = "replies";
            }
        }

        if($result){
            echo json_encode($data);
        }
        else{
            return $data;
        }
    }


    public function kirim()
    {
        $nim =  $this->session->userdata('nim_nip');
        $cht =  $this->input->post('cht');
        $pengirim= $this->session->userdata('nama');
        $waktu= date("Y-m-d H:i:s");
        $pegawai_id= $this->session->userdata('pegawai_id');
        $this->m_chat->kirim_chat($nim,$cht,$pengirim,$waktu,$pegawai_id);
        
        $result = array("status"=>1, "message"=>"Kirim Pesan Berhasil", "chat"=>$cht);
        echo json_encode($result);

    }





	// 	public function room_chat2($id)
	// {
	// 	$data['data']=$this->m_chat->info_dokter($id)->result();
	// 	$this->session->set_userdata('pegawai_id',$id);

	// 	$nim 	=$this->session->userdata('nim_nip');
	// 	$data['data2']=$this->m_chat->load_chat($nim,$id)->result();

	// 	$this->load->view('pasien/chat',$data);
	// 	$this->load->view('pasien/footer_profile');
	// }

	// public function kirim2()
	// {
	// 	$nim =	$this->session->userdata('nim_nip');
	// 	$cht =	$this->input->post('cht');
	// 	$pengirim= $this->session->userdata('nama');
	// 	$waktu=	date("Y-m-d H:i:s");
	// 	$pegawai_id= $this->session->userdata('pegawai_id');
	// 	$this->m_chat->kirim_chat($nim,$cht,$pengirim,$waktu,$pegawai_id);
	// 	redirect('Chat/room_chat/'.$pegawai_id);
	// }



}
