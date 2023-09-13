<?php

class M_pinjaman extends CI_Model
{
    public function getAllPinjaman()
    {
        $this->db->select('*');
        $this->db->from('master_pinjaman');
        $this->db->join('user', 'master_pinjaman.user_id = user.id', 'left');
        return $this->db->get()->result_array();
    }
}