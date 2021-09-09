<?php

class PengajuanSiswa extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		$this->load->model('M_siswa');
	}
	
	public function pengajuan(){
		$data['judul'] = 'pengajuansiswa';
		$this->load->view('siswa/header', $data);
		$this->load->view('siswa/index');
        $this->load->view('siswa/footer');
    }
	
	public function status(){
		$data['judul'] = 'status';
		$this->load->view('siswa/header', $data);
		$this->load->view('siswa/status');
	}
	
	public function tambah_siswa(){
		$this->form_validation->set_rules('nisn', 'nisn', 'required');
		$this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('ibu_kandung', 'ibu_kandung', 'required');
		$this->form_validation->set_rules('tahun_ajaran_id', 'tahun_ajaran_id', 'required');
		$this->form_validation->set_rules('sekolahlulusan', 'sekolahlulusan', 'required');
		$this->form_validation->set_rules('lampiran', 'lampiran', 'required');
        if ($this->form_validation->run()==FALSE){
            redirect('PengajuanSiswa/pengajuan');
        }else{
			// $this->M_siswa->tambahDataSiswa();
			$this->M_siswa->tambahDataSiswa();
            redirect('PengajuanSiswa/status');
            $this->session->set_flashdata('success','ditambahkan');
        }
	}
	
	public function cekstatus(){
		// $nisn = $this->input->post('NISN',TRUE);
		$cek = $this->M_siswa->getNISN();
		if($cek > 0){
			$this->session->set_flashdata('ada','terdaftar');
			redirect('PengajuanSiswa/status');
		}
		else{
			
			$this->session->set_flashdata('tidakada','terdaftar');
			redirect('PengajuanSiswa/status');
		}
	}

}