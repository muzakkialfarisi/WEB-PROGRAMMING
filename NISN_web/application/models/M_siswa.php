<?php
class M_siswa extends CI_model
{

	public function getAllsiswa()
	{
		$data = $this->db->query('SELECT * FROM siswa');
        return $data->result_array();
	}

	public function getSiswaPK($id){
		// $data = $this->db->query("SELECT * FROM siswa where nisn = '$id'");
        // return $data->row_array();
		$this->db->where('nisn',$id);
		return $this->db->get('siswa')->row();
	}

	public function getNISN()
	{
        $nisn = $this->input->post('nisn', true);
        $data = $this->db->query("SELECT * FROM siswa where nisn = '$nisn'");
        return $data->row();
	}

	public function tambahDataSiswa(){
		
		$data = [
			"nisn" => $this->input->post('nisn', true),
			"nik" => $this->input->post('nik', true),
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"tempat_lahir" => $this->input->post('tempat_lahir', true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir', true),
			"jenis_kelamin" => $this->input->post('jenis_kelamin', true),
			"ibu_kandung" => $this->input->post('ibu_kandung', true),
			"tahun_ajaran_id" => $this->input->post('tahun_ajaran_id', true),
			"sekolahlulusan" => $this->input->post('sekolahlulusan', true),
			"lampiran" => $this->input->post('lampiran', true),
		];
		$this->db->insert('siswa',$data);
	}

	public function getSiswaByNama()
	{
		$nama = $this->input->post('nama', true);
		$tempat_lahir = $this->input->post('tempat_lahir', true);
		$tanggal_lahir = $this->input->post('tanggal_lahir', true);
		$ibu_kandung = $this->input->post('ibu_kandung', true);

        $data = $this->db->query("SELECT * FROM siswa where nama = '$nama' and tempat_lahir = '$tempat_lahir' and tanggal_lahir = '$tanggal_lahir' and ibu_kandung = '$ibu_kandung'");
        return $data->result_array();
	}

	public function getSiswaByNISN()
	{
        $nisn = $this->input->post('nisn', true);
        $ibu_kandung = $this->input->post('ibu_kandung', true);
        
        $data = $this->db->query("SELECT * FROM siswa where nisn = '$nisn' and ibu_kandung = '$ibu_kandung' ");
        return $data->result_array();
	}
}
