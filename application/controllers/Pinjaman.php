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
        // $data['pinjaman'] = $this->m_pinjaman->getAllPinjaman();

		$this->load->view('template/header', $data);
        $this->load->view('pinjaman/index', $data);
        $this->load->view('template/footer');
    }
}