<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi4 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('App_model', 'model');
        $this->load->model('Materi4_model', 'materi4');
    }
    public function index()
    {
        $data['title'] = 'Tata Cara Sholat';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi4->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi4/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Materi Tata Cara Sholat';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi4->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi4/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Materi Tata Cara Sholat';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi4->getMateriId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('materi4/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->materi4->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambah!</div>');
        redirect('materi4');
    }

    public function update($id)
    {
        $this->materi4->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
        redirect('materi4');
    }

    public function delete($id)
    {
        $this->materi4->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil dihapus!</div>');
        redirect('materi4');
    }
}
