<?php
class M_siswa extends CI_Model
{
	// public function tampil_siswa(){
	// 	return $this->db->get('siswa');
	// }

	public function tampil_data()
	{
		return $this->db->get('siswa');
	}
}
