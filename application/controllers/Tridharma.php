<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tridharma extends CI_Controller {

    public function index(){
        $data['title'] = "Pembiayaan Tridharma";
        $data['user'] = $this->m_auth->getUserLogin();
        $user = $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
        $user_id = $user['id'];
        // $data['pinjaman'] = $this->m_pengajuan->getPinjaman($user_id);
        $data['tridharma'] = $this->m_tridharma->getAllTridharma();

		$this->load->view('template/header', $data);
        $this->load->view('tridharma/index', $data);
        $this->load->view('template/footer');
    }
}