<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pasien/nav_home');
		$this->load->view('pasien/home');
		$this->load->view('pasien/footer_home');
	}
	public function about()
	{
		$this->load->view('pasien/nav_home');
		$this->load->view('pasien/about');
		$this->load->view('pasien/footer_home');
	}
	public function Profile()
	{
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/profile');
		$this->load->view('pasien/footer_profile');
	}
	public function konsultasi()
	{
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/konsultasi');
		$this->load->view('pasien/footer_profile');
	}

	public function chat()
	{
		$this->load->view('pasien/nav_profile');
		$this->load->view('pasien/chat');
		$this->load->view('pasien/footer_profile');
	}
}
