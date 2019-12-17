<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('App_model', 'model');
        $this->load->model('Materi1_model', 'materi1');
    }

    public function index()
    {
        $data['title'] = 'Admin Muslim Go';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi1->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi1/index');
        $this->load->view('templates/footer');
    }
}
