<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
			$this->load->model('dokumen_masuk_model');

			// if($this->session->userdata('status') != "login"){

			// redirect(base_url('login'));
			// }
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('header_content');
		$this->load->view('aside');
		$dokumen_masuk = $this->dokumen_masuk_model->GetDokumenMasuk();
		$this->load->view('dokumen_masuk', array('data' => $dokumen_masuk));
		$this->load->view('footer');		
	}
}
