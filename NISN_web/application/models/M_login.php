<?php
class M_login extends CI_model{

    public function getAkunLogin($username, $password) {
        $data = $this->db->query("SELECT * FROM akun where username = '$username' and password = '$password' ");
        return $data->row();
    }
    
    public function hapusDataSiswa($id)
	{
		$this->db->where('nisn',$id);
		return $this->db->delete('siswa');
    }

    public function ubahDataSiswa($id)
	{
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
		$this->db->where('nisn',$id);
		return $this->db->update('siswa',$data);
    }

}
?>