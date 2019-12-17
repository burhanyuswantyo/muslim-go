<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('App_model', 'model');
    }

    public function index()
    {

        $data['title'] = 'Login Admin';
        $this->load->view('auth/index', $data);
    }

    public function login()
    {
        $this->model->login();
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil keluar!</div>');
        redirect('auth');
    }

    public function error404()
    {
        $this->load->view('auth/error404');
    }
}
