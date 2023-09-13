<?php

class M_pengajuan extends CI_Model
{
    public function getPinjaman($user_id){
        $this->db->select('*');
        $this->db->from('master_pinjaman');
        $this->db->join('user', 'master_pinjaman.user_id = user.id');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('master_pinjaman.id_pinjaman', 'DESC');
        return $this->db->get()->result_array();
    }
    
    public function getPinjamanId($id)
    {
        return $this->db->get_where('master_pinjaman', ['id_pinjaman' => $id])->row_array();
    }
    public function getIzinAbsen($user_id){
        $this->db->select('*');
        $this->db->from('izin_absen');
        $this->db->join('user', 'izin_absen.user_id = user.id');
        $this->db->where('user_id', $user_id);
        $this->db->order_by('izin_absen.id_izin_absen', 'DESC');
        return $this->db->get()->result_array();
    }
}