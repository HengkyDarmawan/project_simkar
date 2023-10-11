<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin extends CI_Controller {

    public function index(){
        if(!access_jabatan("access_read",31)){
            $this->load->view('auth/blocked');
            return false;
        }
        $data['title'] = "Izin Absensi";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['absen'] = $this->m_absen->getAllIzinAbsen();

		$this->load->view('template/header', $data);
        $this->load->view('absen/izin', $data);
        $this->load->view('template/footer');
    }
    
	public function approved($id)
	{
		$this->db->set('status_izin', '2');
		$this->db->where('id_izin_absen', $id);
		$this->db->update('izin_absen');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Izin Absen Di Approved !!!</div>');
        redirect('izin');
	}
	public function rejected($id)
	{
		$this->db->set('status_izin', '3');
		$this->db->where('id_izin_absen', $id);
		$this->db->update('izin_absen');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Izin Absen Di Rejected !!!</div>');
        redirect('izin');
	}
}