<?php

class M_tridharma extends CI_Model
{
    public function getAllTridharma()
    {
        $this->db->select('*');
        $this->db->from('tridharma');
        $this->db->join('user', 'tridharma.user_id = user.id', 'left');
        return $this->db->get()->result_array();
    }
}