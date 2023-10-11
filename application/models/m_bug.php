<?php

class M_bug extends CI_Model
{
    public function getAllBug()
    {
        $this->db->select('*');
        $this->db->from('bug');
        $this->db->join('user', 'bug.user_id = user.id', 'left');
        return $this->db->get()->result_array();
    }
}