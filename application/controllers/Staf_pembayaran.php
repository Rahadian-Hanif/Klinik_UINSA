<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf_pembayaran extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_pembayaran');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $tanggal    = date("Y/m/d");
        $data['data']=$this->m_pembayaran->pasien($tanggal)->result();
        $this->load->view('staff/navbar');
        $this->load->view('staff/pembayaran',$data);
        $this->load->view('staff/footer');
    }

     public function bayar($id)
    {
        $data['data']=$this->m_pembayaran->load_bayar($id)->result();
        $this->load->view('staff/navbar');
        $this->load->view('staff/form_bayar',$data);
        $this->load->view('staff/footer');
    }

     public function update($id)
    {

        $biaya=$this->input->post('biaya',TRUE);
        $data['data'];
        if ($biaya != "Pilih...") {
            if ($biaya=="15000") {
                $poli="Poli Umum";
                $int=(int)$biaya;
                $data['data']=$this->m_pembayaran->update_bayar($id,$int,$poli);
            } else {
                $poli="Poli Gigi";
                $int=(int)$biaya;
                $data['data']=$this->m_pembayaran->update_bayar($id,$int,$poli);
            }
            redirect('Staf_pembayaran');
        }else{
            $this->session->set_flashdata('error_poli','Poli Belum Dipilih');
            redirect('Staf_pembayaran/bayar/'.$id);
        }
    }
}
