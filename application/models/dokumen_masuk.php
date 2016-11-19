<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Dokumen_Masuk extends CI_Model {

	public function GetDokumenMasuk(){
		$data = $this->db->query('select * from dokumen_masuk');
		return $data->result_array();
	}

}