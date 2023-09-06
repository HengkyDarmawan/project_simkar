<?php

class M_user extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getAllUserPending()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('approval', 'review');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getUserByEmail($email){
		$this->db->select('u.*, r.role, mj.*');
        $this->db->from('user u');
        $this->db->where('u.email_undira', $email);
        $this->db->join('user_role r', 'r.id = u.role_id');
        $this->db->join('master_jabatan mj', 'mj.id_jabatan = u.jabatan_id');
        return $this->db->get()->row_array();
    }
    public function getJabatanByUserLogin($user_id) {
        $query = $this->db->get_where('master_kelompok_jabatan', array('user_id' => $user_id));
        return $query->result_array();
    }
    public function getPegawaiByID($id)
    {
        $this->db->select('user.*, master_jabatan.jabatan');
        $this->db->from('user');
        $this->db->join('master_jabatan', 'user.jabatan_id = master_jabatan.id_jabatan');
        $this->db->where('user.id', $id);
        return $this->db->get()->row_array();
    }

    public function addAllPegawai($data_pegawai,$data_lain)
    {
        $this->db->insert('user', $data_pegawai);
        $user_id = $this->db->insert_id();

        //jabatan
        $user_jabatan = [];
        foreach ($data_lain['jabatan'] as $key => $value) {
            $roleId = $this->db->query("SELECT * from master_jabatan where id_jabatan = ".$value)->row_array();
            if($roleId){
                $user_jabatan[] = [
                    "user_id" => $user_id,
                    "jabatan_id" => $value,
                    "role_id" => $roleId['role_id'],
                    "golongan_id" => $data_lain['id_golongan'][$key],
                ];
            }
        }
        $this->db->insert_batch('user_jabatan', $user_jabatan);

    }
    public function hapusPegawai($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
    public function editPegawai($data_pegawai,$data_lain)
    {
        $this->db->where('id', $data_pegawai['id']);
        $this->db->update('user', $data_pegawai);

        //jabatan
        $user_jabatan = [];
        foreach ($data_lain['jabatan'] as $key => $value) {
            $roleId = $this->db->query("SELECT * from master_jabatan where id_jabatan = ".$value)->row_array();
            if($roleId != null){
                $user_jabatan[] = [
                    "user_id" => $data_pegawai['id'],
                    "jabatan_id" => $value,
                    "role_id" => $roleId['role_id'],
                    "golongan_id" => $data_lain['id_golongan'][$key],
                ];
            }
        }
        // echo json_encode($user_jabatan);die;
        $this->db->delete('user_jabatan', ['user_id'=> $data_pegawai['id']]);
        $this->db->insert_batch('user_jabatan', $user_jabatan);
    }

    public function getKeluargaById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('data_keluarga', 'data_keluarga.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }

    public function getPengalamanById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('data_pengalaman', 'data_pengalaman.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }

    public function getPendidikanById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('master_pendidikan', 'master_pendidikan.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }
    public function getPelatihanById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('data_pelatihan', 'data_pelatihan.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }
    public function getSeminarById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('master_seminar', 'master_seminar.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }
    public function getJabatan()
    {
        return $this->db->get('master_jabatan')->result_array();
    }
    public function getRole()
    {
        return $this->db->get('user_role')->result_array();
    }

	public function query_excel()
	{
		$query = $this->db->select('user.*, master_jabatan.jabatan, user_role.role')
				->from('user')
				->join('master_jabatan', 'user.jabatan_id = master_jabatan.id_jabatan')
				->join('user_role', 'user.role_id = user_role.id')
				->order_by('id', 'desc')
				->get()->result();
		return $query;
	}
}
