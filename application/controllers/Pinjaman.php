<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjaman extends CI_Controller {

    public function index(){
        if(!access_jabatan("access_read",31)){
            $this->load->view('auth/blocked');
            return false;
        }
        $data['title'] = "Data Pinjaman";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['pinjaman'] = $this->m_pinjaman->getAllPinjaman();

		$this->load->view('template/header', $data);
        $this->load->view('pinjaman/index', $data);
        $this->load->view('template/footer');
    }
    
	public function approved($id)
	{
		$this->db->set('status_pengajuan', '2');
		$this->db->where('id_pinjaman', $id);
		$this->db->update('master_pinjaman');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pinjaman Di Approved !!!</div>');
        redirect('pinjaman');
	}
	public function rejected($id)
	{
		$this->db->set('status_pengajuan', '3');
		$this->db->where('id_pinjaman', $id);
		$this->db->update('master_pinjaman');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pinjaman Di Rejected !!!</div>');
        redirect('pinjaman');
	}
}