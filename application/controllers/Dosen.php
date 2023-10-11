<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {

        $data['user'] = $this->m_auth->getUserLogin();
        $data['absensiDosen'] = $this->db->select('absensi_dosen.*, user.name, user.nik_karyawan, count(absensi_dosen.id_absensi_dosen) as count')->from('absensi_dosen')->join('user','absensi_dosen.user_id=user.id','left')->group_by('absensi_dosen.user_id')->get()->result_array();
        $data['title'] = "Rekap Absen Dosen";
        
        $this->load->view('template/header', $data);
        $this->load->view('absen/dosen', $data);
        $this->load->view('template/footer');
    }

    public function detailBulan($user_id)
    {

        $data['user'] = $this->m_auth->getUserLogin();
        $data['absensiDosen'] = $this->db->select('absensi_dosen.*, user.name, user.nik_karyawan, count(absensi_dosen.id_absensi_dosen) as count, month(absensi_dosen.tanggal) as month, SUM(CASE WHEN status = "Y" THEN 1 ELSE 0 END) as count_masuk, SUM(CASE WHEN status = "I" THEN 1 ELSE 0 END) as count_izin, SUM(CASE WHEN status = "N" THEN 1 ELSE 0 END) as count_alpha')->from('absensi_dosen')->join('user','absensi_dosen.user_id=user.id','left')->group_by('month(absensi_dosen.tanggal)')->order_by('month')->where('absensi_dosen.user_id',$user_id)->get()->result_array();
        $data['title'] = "Rekap Bulanan Absen Dosen";

        $this->load->view('template/header', $data);
        $this->load->view('absen/dosen_detail_bulan', $data);
        $this->load->view('template/footer');
    }

    public function detailHari($user_id,$month)
    {

        $data['user'] = $this->m_auth->getUserLogin();
        $data['absensiDosen'] = $this->db->select('absensi_dosen.*, user.name, user.nik_karyawan, month(absensi_dosen.tanggal) as month')->from('absensi_dosen')->join('user','absensi_dosen.user_id=user.id','left')->order_by('absensi_dosen.tanggal')->where(['absensi_dosen.user_id'=>$user_id, 'month(absensi_dosen.tanggal)'=>$month])->get()->result_array();
        $data['title'] = "Rekap Hari Absen Dosen";

        $this->load->view('template/header', $data);
        $this->load->view('absen/dosen_detail_hari', $data);
        $this->load->view('template/footer');
    }
}