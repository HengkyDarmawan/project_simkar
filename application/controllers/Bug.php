<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bug extends CI_Controller
{
    public function index()
    {

        $data['user'] = $this->m_auth->getUserLogin();
        $data['bug'] = $this->m_bug->getAllBug();
        $data['title'] = "Bug";
        
        $this->load->view('template/header', $data);
        $this->load->view('bug/index', $data);
        $this->load->view('template/footer');
    }
}