<?php

class M_lembur extends CI_Model
{
    public function getAllLembur()
    {
        $this->db->select('*');
        $this->db->from('data_lembur');
        $this->db->join('user', 'data_lembur.user_id = user.id', 'left');
        return $this->db->get()->result_array();
    }
}