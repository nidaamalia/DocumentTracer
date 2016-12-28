<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	function __construct(){
		parent::__construct();
			$this->load->model('dokumen_masuk');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');		
	}

	public function loginAkun(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$passworden = md5($password);

		$where = array(
			'username' => $username,
			'password' => $passworden
			);

		$login = $this->dokumen_masuk->loginAkun('akun', $where)->num_rows();

		if ($login > 0) {

			$login_session = array(
				'username_login' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($login_session);
			
			redirect(base_url('beranda'));
	    }

	    else {
	    	
	    	echo "username / password salah";
	    }
	}

	public function logoutAkun(){
		
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}