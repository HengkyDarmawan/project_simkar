<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function index()
    {

        $data['user'] = $this->m_auth->getUserLogin();
        $data['absensi'] = $this->db->select('absensi.*, user.name, user.nik_karyawan, count(absensi.id) as count')->from('absensi')->join('user','absensi.id_user=user.id','left')->group_by('absensi.id_user')->get()->result_array();
        $data['title'] = "Rekap Absen";
        
        $this->load->view('template/header', $data);
        $this->load->view('absen/index', $data);
        $this->load->view('template/footer');
    }

    public function detailBulan($id_user)
    {

        $data['user'] = $this->m_auth->getUserLogin();
        $data['absensi'] = $this->db->select('absensi.*, user.name, user.nik_karyawan, count(absensi.id) as count, month(absensi.tanggal) as month, SUM(CASE WHEN status = "masuk" THEN 1 ELSE 0 END) as count_masuk, SUM(CASE WHEN status = "izin" THEN 1 ELSE 0 END) as count_izin, SUM(CASE WHEN status = "alpha" THEN 1 ELSE 0 END) as count_alpha')->from('absensi')->join('user','absensi.id_user=user.id','left')->group_by('month(absensi.tanggal)')->order_by('month')->where('absensi.id_user',$id_user)->get()->result_array();
        $data['title'] = "Rekap Bulanan Absen";

        $this->load->view('template/header', $data);
        $this->load->view('absen/detail_bulan', $data);
        $this->load->view('template/footer');
    }

    public function detailHari($id_user,$month)
    {

        $data['user'] = $this->m_auth->getUserLogin();
        $data['absensi'] = $this->db->select('absensi.*, user.name, user.nik_karyawan, month(absensi.tanggal) as month')->from('absensi')->join('user','absensi.id_user=user.id','left')->order_by('absensi.tanggal')->where(['absensi.id_user'=>$id_user, 'month(absensi.tanggal)'=>$month])->get()->result_array();
        $data['title'] = "Rekap Hari Absen";

        $this->load->view('template/header', $data);
        $this->load->view('absen/detail_hari', $data);
        $this->load->view('template/footer');
    }

    public function import()
    {
        $this->load->library('excel');
        if(isset($_FILES["file"]["name"])) {
            //upload 
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];
            $file_size =$_FILES['file']['size'];
            $file_type=$_FILES['file']['type'];

            $object = PHPExcel_IOFactory::load($file_tmp);
            $worksheet = $object->getSheetByName('import');
            if($worksheet){
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for($row=2; $row<=$highestRow; $row++){
    
                    $nip = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $tanggal = PHPExcel_Style_NumberFormat::toFormattedString($worksheet->getCellByColumnAndRow(1, $row)->getValue(), 'YYYY-MM-DD');
                    $status = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $jam_masuk = PHPExcel_Style_NumberFormat::toFormattedString($worksheet->getCellByColumnAndRow(3, $row)->getValue(), 'HH:MM:SS');
                    $jam_pulang = PHPExcel_Style_NumberFormat::toFormattedString($worksheet->getCellByColumnAndRow(4, $row)->getValue(), 'HH:MM:SS');
                    $user = $this->db->query("SELECT * FROM user WHERE nik_karyawan like '%".$nip."%'")->row_array();

                    if($user != null){
                        $absensi = $this->db->get_where('absensi', [
                            'id_user' => $user['id'], 
                            'tanggal' => $tanggal
                        ])->row_array();

                        if($absensi){
                            $this->db->update('absensi', [
                                'status' => $status,
                                'jam_masuk' => $jam_masuk,
                                'jam_pulang' => $jam_pulang,
                            ],[
                                'id_user' => $user['id'],
                                'tanggal' => $tanggal,
                            ]);
                        }else{
                            $this->db->insert('absensi', [
                                'id_user' => $user['id'],
                                'tanggal' => $tanggal,
                                'status' => $status,
                                'jam_masuk' => $jam_masuk,
                                'jam_pulang' => $jam_pulang,
                            ]);
                        }
                    }else{
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Import Absensi Gagal !!!</div>');
                        redirect('absensi');
                    }
                }
            }
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Import Absensi Berhasil !!!</div>');
            redirect('absensi');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Import Absensi Gagal !!!</div>');
            redirect('absensi');
        }
    }

}
