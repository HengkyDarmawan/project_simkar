<?php

class M_gaji extends CI_Model
{
    public function getAllGaji()
    {
        $this->db->select('*');
        $this->db->from('t_gaji_tendik');
        return $this->db->get()->result_array();
    }
    public function addGaji()
    {
        $data = [
            "golongan" => $this->input->post('golongan', true),
            "gaji_pokok" => $this->input->post('gaji_pokok', true),
            "t_jabatan_fungsional" => $this->input->post('t_jabatan_fungsional', true),
            "t_pendidikan_s3" => $this->input->post('t_pendidikan_s3', true),
            "transport_makan" => $this->input->post('transport_makan', true),
            "t_jabatan_struktural" => $this->input->post('t_jabatan_struktural', true),
            "t_jabatan_rangkap" => $this->input->post('t_jabatan_rangkap', true),
            "bpjs_yayasan_ketnaker" => $this->input->post('bpjs_yayasan_ketnaker', true),
            "bpjs_yayasan_kesehatan" => $this->input->post('bpjs_yayasan_kesehatan', true),
            "bpjs_pribadi_ketnaker" => $this->input->post('bpjs_pribadi_ketnaker', true),
            "bpjs_pribadi_kesehatan" => $this->input->post('bpjs_pribadi_kesehatan', true),
            "transisi" => 0,
            "pph" => $this->input->post('pph', true),
            "periode" => $this->input->post('periode', true)
        ];
        $this->db->insert('t_gaji_tendik', $data);
    }
    public function hapusGaji($id)
    {
        $this->db->delete('t_gaji_tendik', ['id_golongan' => $id]);
    }
    public function getGajiById($id)
    {
        return $this->db->get_where('t_gaji_tendik', ['id_golongan' => $id])->row_array();
    }
}