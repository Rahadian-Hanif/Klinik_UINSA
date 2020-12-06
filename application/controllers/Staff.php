<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_staff');
    }
    public function index()
    {
        $this->load->view('staff/login');
    }

   function auth(){
        $username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);
        $passwordx= md5($password);
        $validate = $this->m_staff->validate($username,$passwordx);
        if($validate->num_rows() > 0){
            $data       = $validate->row_array();
            $nama       = $data['nama'];
            $alamat     = $data['alamat'];
            $username   = $data['username'];
            $id         = $data['id'];
            $level      = $data['status'];
            $sesdata    = array(
                'nama'                  => $nama,
                'alamat'                => $alamat,
                'username'              => $username,
                'id'                    => $id,
                'status'                => $level,
                'logged_in'             => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('C_Dashboard');          
            }else{
                echo $this->session->set_flashdata('msg','Email dan/atau password salah');
                // kosong
                redirect('Staff');             
             }
     }

	function logout(){
      $this->session->sess_destroy();
      redirect('Staff');
    }
}
