<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

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
		$this->load->view('header_content');
		$this->load->view('aside');
		$dokumen_masuk = $this->dokumen_masuk->GetAkun();
		$this->load->view('akun', array('data' => $dokumen_masuk));
		$this->load->view('footer');		
	}

	public function createAkun(){

		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$passworden = md5($password);
		$role = $this->input->post('role');

		$data = array(
			'nama' => $nama, 
			'username' => $username,
			'password' => $passworden,
			'role' => $role
			);

		$this->dokumen_masuk->createAkun($data,'akun');
		redirect('akun');
	}

	public function editAkun($id){

		$where = array(
			'id' => $id
			);
		$data['akun'] = $this->dokumen_masuk->editAkun($where,'akun')->result();
	}

	public function updateAkun(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role');

		$data = array(
			'nama' => $nama, 
			'username' => $username,
			'password' => $password,
			'role' => $role
			);

		$where = array(
			'id' => $id
			);

		$this->dokumen_masuk->updateAkun($where,$data,'akun');
		redirect('akun');			
	}

	public function hapusAkun($id){

		$where = array(
			'id' => $id
			);

		$this->dokumen_masuk->hapusAkun($where,'akun');
		redirect('akun');
	}
}
