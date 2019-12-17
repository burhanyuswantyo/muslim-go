<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi3 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('App_model', 'model');
        $this->load->model('Materi3_model', 'materi3');
    }
    public function index()
    {
        $data['title'] = 'Rukun Iman';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi3->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi3/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Materi Rukun Iman';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi3->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi3/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Materi Rukun Iman';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi3->getMateriId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('materi3/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->materi3->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambah!</div>');
        redirect('materi3');
    }

    public function update($id)
    {
        $this->materi3->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
        redirect('materi3');
    }

    public function delete($id)
    {
        $this->materi3->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil dihapus!</div>');
        redirect('materi3');
    }
}
