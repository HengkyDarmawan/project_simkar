<?php

class M_pinjaman extends CI_Model
{
    public function getAllGaji()
    {
        $this->db->select('*');
        $this->db->from('data_pinjaman');
        return $this->db->get()->result_array();
    }
}