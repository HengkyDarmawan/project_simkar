<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lembur extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Lembur";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['lembur'] = $this->m_lembur->getAllLembur();
        $this->load->view('template/header', $data);
        $this->load->view('lembur/index', $data);
        $this->load->view('template/footer');
    }
    
	public function approved($id)
	{
		$this->db->set('status_lembur', '2');
		$this->db->where('id_lembur', $id);
		$this->db->update('data_lembur');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lembur Di Approved !!!</div>');
        redirect('lembur');
	}
	public function rejected($id)
	{
		$this->db->set('status_lembur', '3');
		$this->db->where('id_lembur', $id);
		$this->db->update('data_lembur');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lembur Di Rejected !!!</div>');
        redirect('lembur');
	}
}