<?php

class HomeNISN extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		$this->load->model('M_siswa');
	}
	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/index');
		$this->load->view('nisn/footer');
	}
	public function index2(){
		$data['judul'] = 'Aturan&Kebijakan';
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/index2');
		$this->load->view('nisn/footer');
	}
	public function index3(){
		$data['judul'] = 'MekanismePenerbitanNISN';
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/index3');
		$this->load->view('nisn/footer');
	}
	public function index4(){
		$data['judul'] = 'datasiswa';
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/index4');
		$this->load->view('nisn/footer');
	}
	public function index5(){
		$data['judul'] = 'kontakkami';
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/index5');
		$this->load->view('nisn/footer');
	}
	public function index6(){
		$data['judul'] = 'FAQ';
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/index6');
		$this->load->view('nisn/footer');
	}
	public function indexcari(){
		$data['judul'] = 'CariNama';
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/indexcari');
		$this->load->view('nisn/footer');
	}
	public function pengajuan(){
		$data['judul'] = 'Pengajuan';
		$this->load->view('siswa/header', $data);
		$this->load->view('siswa/index');
		$this->load->view('siswa/footer');
	}
	public function CariSiswa_NISN(){
		$data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->M_siswa->getSiswaByNISN();
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/indexcari_nisn');
		$this->load->view('nisn/footer');
	}
	public function CariSiswa_Nama(){
		$data['judul'] = 'Daftar Siswa';
        $data['siswanama'] = $this->M_siswa->getSiswaByNama();
		$this->load->view('nisn/header', $data);
		$this->load->view('nisn/indexcari_nama');
		$this->load->view('nisn/footer');
	}
	

}