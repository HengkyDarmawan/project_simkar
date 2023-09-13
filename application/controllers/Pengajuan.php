<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

    public function pinjaman(){
        // if(!access_jabatan("access_read",31)){
        //     $this->load->view('auth/blocked');
        //     return false;
        // }
        $data['title'] = "Pengajuan Pinjaman";
        $data['user'] = $this->m_auth->getUserLogin();
        $user = $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
        $user_id = $user['id'];
        $data['pinjaman'] = $this->m_pengajuan->getPinjaman($user_id);

		$this->load->view('template/header', $data);
        $this->load->view('pengajuan/pinjaman', $data);
        $this->load->view('template/footer');
    }
    
    public function addPinjaman()
    {
        $data['title'] = "Ajukan Pinjaman";
        $data['user'] = $this->m_auth->getUserLogin();
        $user = $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
        // var_dump($user);die;

        $this->form_validation->set_rules('total_pinjaman', 'Jumlah Pinjaman', 'required|trim');
        $this->form_validation->set_rules('tenor', 'Lama Pinjaman', 'required|trim');
        $this->form_validation->set_rules('alasan', 'Alasan Pinjaman', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('pengajuan/pinjaman_add', $data);
            $this->load->view('template/footer');
        } else {
            $userid = $data['user']['id'];
            $total_pinjaman = $this->input->post('total_pinjaman');
            $tenor = $this->input->post('tenor');
            $alasan = $this->input->post('alasan');

            $this->db->set('user_id', $userid);
            $this->db->set('total_pinjaman', $total_pinjaman);
            $this->db->set('tenor', $tenor);
            $this->db->set('status_pengajuan', 1);
            $this->db->set('alasan', $alasan);
            $this->db->set('tgl_pengajuan', date('Y-m-d'));
            $this->db->insert('master_pinjaman');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Pinjaman Berhasil !!!</div>');
            redirect('pengajuan/pinjaman');
        }
    }
    public function detailPinjaman()
    {
        $id = $this->uri->segment(3);

        $data['title'] = 'Detail Pinjaman';
        $data['user'] = $this->m_auth->getUserLogin();
        $data['pinjaman'] = $this->m_pengajuan->getPinjamanId($id);

        $this->load->view('template/header', $data);
        $this->load->view('pengajuan/pinjaman_detail', $data);
        $this->load->view('template/footer');
    }
    public function absen(){
        // if(!access_jabatan("access_read",31)){
        //     $this->load->view('auth/blocked');
        //     return false;
        // }
        $data['title'] = "Pengajuan Izin Absen / Penugasan";
        $data['user'] = $this->m_auth->getUserLogin();
        $user = $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
        $user_id = $user['id'];
        $data['izinAbsen'] = $this->m_pengajuan->getIzinAbsen($user_id);

		$this->load->view('template/header', $data);
        $this->load->view('pengajuan/absen', $data);
        $this->load->view('template/footer');
    }
    public function addAbsen()
    {
        $data['title'] = "Pengajuaan Izin";
        $data['user'] = $this->m_auth->getUserLogin();
        $user = $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
        // var_dump($user);die;

        $this->form_validation->set_rules('total_pinjaman', 'Jumlah Pinjaman', 'required|trim');
        $this->form_validation->set_rules('tenor', 'Lama Pinjaman', 'required|trim');
        $this->form_validation->set_rules('alasan', 'Alasan Pinjaman', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('pengajuan/absen_add', $data);
            $this->load->view('template/footer');
        } else {
            $userid = $data['user']['id'];
            $total_pinjaman = $this->input->post('total_pinjaman');
            $tenor = $this->input->post('tenor');
            $alasan = $this->input->post('alasan');

            $this->db->set('user_id', $userid);
            $this->db->set('total_pinjaman', $total_pinjaman);
            $this->db->set('tenor', $tenor);
            $this->db->set('status_pengajuan', 1);
            $this->db->set('alasan', $alasan);
            $this->db->set('tgl_pengajuan', date('Y-m-d'));
            $this->db->insert('master_pinjaman');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Pinjaman Berhasil !!!</div>');
            redirect('pengajuan/pinjaman');
        }
    }
}