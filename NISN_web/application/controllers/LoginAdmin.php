<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdmin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		$this->load->model('M_siswa');
	}
	
	function proses() {
		$username= $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
	    $validate = $this->M_login->getAkunLogin($username,$password);
		if($validate > 0){
			redirect('LoginAdmin/datasiswa');
		} else{
			$this->session->set_flashdata('result_login', 'Username atau Password yang anda masukkan salah.');
			redirect('LoginAdmin/login');
		}
	}

    function login()
    {
        $data['judul'] = 'Login';
		$this->load->view('admin/login_page', $data);
	}

	
	function datasiswa()
    {
		//$this->load->Model('M_siswa');
		$data['judul'] = 'DataSiswa';
		$data['getdata'] = $this->M_siswa->getAllsiswa();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	function tambahsiswa_page()
    {
		$data['judul'] = 'DataSiswa';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/tambahsiswa_admin');
		$this->load->view('admin/footer');
	}

	function tambahsiswa_proses()
    {
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
            redirect('LoginAdmin/tambahsiswa_page');
        }else{
			$this->M_siswa->tambahDataSiswa();
			$this->session->set_flashdata('success','ditambahkan');
			redirect('LoginAdmin/datasiswa');
        }
	}

	public function hapussiswa($id){
		$this->M_login->hapusDataSiswa($id);
		$this->session->set_flashdata('hapus','dihapus');
		redirect('LoginAdmin/datasiswa');
	}
	

	public function ubahsiswa($id){
		$data['judul'] = 'DataSiswa';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/updatesiswa_admin');
		$this->load->view('admin/footer');
		$data['getsiswa']=$this->M_siswa->getSiswaPK($id);
	}

	public function ubahsiswa_proses($id){
		$data['getsiswa']=$this->M_siswa->getSiswaPK($id);
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
            // redirect('LoginAdmin/datasiswa');
        }else{
			
            $this->M_login->ubahDataSiswa($id);
            $this->session->set_flashdata('update','diubah');
            redirect('LoginAdmin/datasiswa');
        }
    }

}