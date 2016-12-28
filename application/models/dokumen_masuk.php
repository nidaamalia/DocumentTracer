<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

class Dokumen_Masuk extends CI_Model {

	public function GetAkun(){
		$data = $this->db->query('select * from akun');
		return $data->result_array();
	}

	public function createAkun($data, $table){

		$this->db->insert($table, $data);
	}

	public function editAkun($where, $table){

		return $this->db->get_where($table, $where);
	}

	public function updateAkun($where, $data, $table){

		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapusAkun($id, $table){

		$this->db->where($id);
		$this->db->delete($table);
	}

	public function loginAkun($table, $where){

		return $this->db->get_where($table, $where);
	}

}