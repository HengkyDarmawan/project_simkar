<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

    public function index(){
        if(!access_jabatan("access_read",31)){
            $this->load->view('auth/blocked');
            return false;
        }
        $data['title'] = "Data Gaji";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['gaji'] = $this->m_gaji->getAllGaji();

		$this->load->view('template/header', $data);
        $this->load->view('gaji/index', $data);
        $this->load->view('template/footer');
    }
    public function addGaji(){
        $data['title'] = "Data Gaji";
        $data['user'] = $this->m_auth->getUserLogin();

        $this->form_validation->set_rules('golongan', 'Golongan', 'required');
        $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required|numeric');
        $this->form_validation->set_rules('t_jabatan_fungsional', 'Tunjangan Jabatan Fungsional', 'required|numeric');
        $this->form_validation->set_rules('t_pendidikan_s3', 'Tunjangan Pendidikan S3', 'required|numeric');
        $this->form_validation->set_rules('transport_makan', 'Transport & Makan', 'required|numeric');
        $this->form_validation->set_rules('t_jabatan_struktural', 'Tunjangan Jabatan Struktural', 'required|numeric');
        $this->form_validation->set_rules('t_jabatan_rangkap', 'Tunjangan Jabatan Rangkap', 'required|numeric');
        $this->form_validation->set_rules('bpjs_yayasan_ketnaker', 'BPJS Yayasan Ketenagakerjaan', 'required');
        $this->form_validation->set_rules('bpjs_yayasan_kesehatan', 'BPJS Yayasan Kesehatan', 'required');
        $this->form_validation->set_rules('bpjs_pribadi_ketnaker', 'BPJS pribadi Ketenagakerjaan', 'required');
        $this->form_validation->set_rules('bpjs_pribadi_kesehatan', 'BPJS pribadi Ketenagakerjaan', 'required');
        $this->form_validation->set_rules('pph', 'PPH 21', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('gaji/gaji_add', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_gaji->addGaji();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Gaji Di Tambahkan !!!</div>');
            redirect('gaji');
        }
		
    }
    public function hapusGaji($id)
    {
        $this->m_gaji->hapusGaji($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Gaji di Hapus !!!</div>');
        redirect('gaji');
    }
    public function detailGaji()
    {
        if(!access_jabatan("access_read",31)){
            $this->load->view('auth/blocked');
            return false;
        }
        $id = $this->uri->segment(3);

        $data['title'] = 'Detail Gaji';
        $data['user'] = $this->m_auth->getUserLogin();
        $data['gaji'] = $this->m_gaji->getGajiById($id);

        $this->load->view('template/header', $data);
        $this->load->view('gaji/gaji_detail', $data);
        $this->load->view('template/footer');
    }
	public function slip()
	{
        if(!access_jabatan("access_read",32)){
            $this->load->view('auth/blocked');
            return false;
        }
        
        $data['title'] = "Slip Gaji";
        $data['user'] = $this->m_auth->getUserLogin();

		$this->load->view('template/header', $data);
        $this->load->view('gaji/slip', $data);
        $this->load->view('template/footer');
	}
    public function detailSlip()
	{
        if(!access_jabatan("access_read",32)){
            $this->load->view('auth/blocked');
            return false;
        }
        
        $data['title'] = "Detail Gaji";
        $data['user'] = $this->m_auth->getUserLogin();
		$this->load->view('template/header', $data);
        $this->load->view('gaji/slip_detail', $data);
        $this->load->view('template/footer');
	}
}
