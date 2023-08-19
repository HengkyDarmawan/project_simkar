<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }
    public function index()
    {
        if(!access_jabatan("access_read",34)){
            $this->load->view('auth/blocked');
            return false;
        }

        $data['user'] = $this->m_auth->getUserLogin();
        $data['title'] = "Rekap Absen";
        
        $this->load->view('template/header', $data);
        $this->load->view('absen/index', $data);
        $this->load->view('template/footer');
    }
    public function detailBulan()
    {
        if(!access_jabatan("access_read",34)){
            $this->load->view('auth/blocked');
            return false;
        }

        $data['user'] = $this->m_auth->getUserLogin();
        $data['title'] = "Rekap Bulanan Absen";

        $this->load->view('template/header', $data);
        $this->load->view('absen/detail_bulan', $data);
        $this->load->view('template/footer');
    }
    public function detailHari()
    {
        if(!access_jabatan("access_read",34)){
            $this->load->view('auth/blocked');
            return false;
        }

        $data['user'] = $this->m_auth->getUserLogin();
        $data['title'] = "Rekap Hari Absen";

        $this->load->view('template/header', $data);
        $this->load->view('absen/detail_hari', $data);
        $this->load->view('template/footer');
    }
}
