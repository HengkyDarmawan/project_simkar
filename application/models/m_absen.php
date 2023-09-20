<?php

class M_absen extends CI_Model
{
    public function getAllIzinAbsen()
    {
        $this->db->select('*');
        $this->db->from('izin_absen');
        $this->db->join('user', 'izin_absen.user_id = user.id', 'left');
        return $this->db->get()->result_array();
    }
}