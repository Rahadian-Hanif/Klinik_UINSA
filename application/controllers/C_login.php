<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index()
    {
        $this->load->view('staff/login');
    }

   function auth(){
        $nim    = $this->input->post('nim',TRUE);
        $password = $this->input->post('password',TRUE);
        $validate = $this->login_model->validate($nim,$password);
        if($validate->num_rows() > 0){
            $data       = $validate->row_array();
            $nama       = $data['nama'];
            $nim      = $data['nim/nip'];
            $password   = $data['PASSWORD'];
            $id_user    = $data['ID_USER'];
            $level      = $data['KETERANGAN_USER'];
            $sesdata    = array(
                'nama'                  => $nama,
                'nim/nip'                 => $nim,
                'PASSWORD'              => $password,
                'ID_USER'               => $id_user,
                'KETERANGAN_USER'       => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);

            if($level === 'admin'){
            	redirect('Auth/home_admin');
            }
            else{
                    redirect('Auth/index');
            }
            }else{
                echo $this->session->set_flashdata('msg','Email Atau Password Salah');
                // kosong
                redirect('Auth/index');
             }
     }

	function logout(){
      $this->session->sess_destroy();
      redirect('Auth/index');
    }
}
