<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_pasien');
    }

	public function index()
	{
		$nim =	$this->session->userdata('nim_nip');
		$data['data']=	$this->m_pasien->riwayat_antrian($nim)->result();
		$this->load->view('pasien/nav_profile');
        $this->load->view('pasien/profile',$data);
        $this->load->view('pasien/footer_profile');
	}

		public function ambil_antrian()
	{
		$this->load->model('m_daftar');
		date_default_timezone_set("Asia/Jakarta");
    	$nim 	= $this->input->post('nim');
    	$validate   = $this->m_daftar->validate($nim);
    	if($validate->num_rows() > 0){
    		$tanggal = $this->input->post('tanggal');
	        $antrian = random_string('alnum',10);
	        $jam     = date("H:i:s");
	        $status  = "Menunggu";
			$this->m_pasien->daftar($nim,date("Y/m/d",strtotime($tanggal)),$antrian,$jam,$status);
			$this->session->set_flashdata('berhasil','berhasil');
			redirect('Profile');
		}else{
             $this->session->set_flashdata('error','NIM/NIP tidak ditemukan');
             // tidak ditemukan atau kosong
             redirect('Profile');             
             }
		
		
	}

	public function print()
	{
		$this->load->library('dompdf_gen');
		$nim = $this->session->userdata('nim_nip');
		$data['data']=$this->m_pasien->print($nim)->result();

        $this->load->view('print',$data);
        $paper_size = 'A6';
        $orientation = 'portrait ';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Antrian.pdf",array('Attachment' =>0));

	}

}