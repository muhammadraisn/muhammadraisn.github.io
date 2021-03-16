<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Form Validation

        // Begin Login
        $result = $this->Auth_model->check_login($username,$password);
        $userinfo = $this->Auth_model->getUserInfo($username);
        if($result == TRUE) {
            //Session
            $session = array(
                    'id'        => $userinfo->id,
                    'level'     => $userinfo->level,
                    'username'  => $username,
                    'logged_in' => TRUE
            );

            $this->session->set_userdata($session);
            if ($this->session->userdata('level') == 'Calon Siswa') {
                redirect("siswa");
            }elseif ($this->session->userdata('level') == 'Marketing') {
                redirect("staff");
            }elseif ($this->session->userdata('level') == 'Keuangan 1') {
                redirect("kepala");
            }elseif ($this->session->userdata('level') == 'Keuangan 2') {
                redirect("pimpinan/karyawan");
            }
        } else {
            $this->session->set_flashdata('error_login', 'Username atau Password Salah');
            redirect("auth");
        }
    }

    public function logout() {      
        $this->session->sess_destroy();
        redirect("auth");
    }
}
