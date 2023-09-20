<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insentif extends CI_Controller {

    public function index(){
        $data['title'] = "Insentif Dosen";
        $data['user'] = $this->m_auth->getUserLogin();
        $user = $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
        $user_id = $user['id'];
        // $data['pinjaman'] = $this->m_pengajuan->getPinjaman($user_id);

		$this->load->view('template/header', $data);
        $this->load->view('insentif/index', $data);
        $this->load->view('template/footer');
    }
}