<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('App_model', 'model');
        $this->load->model('Materi2_model', 'materi2');
    }
    public function index()
    {
        $data['title'] = 'Rukun Islam';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi2->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi2/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Materi Rukun Islam';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi2->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi2/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Materi Rukun Islam';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi2->getMateriId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('materi2/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->materi2->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambah!</div>');
        redirect('materi2');
    }

    public function update($id)
    {
        $this->materi2->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
        redirect('materi2');
    }

    public function delete($id)
    {
        $this->materi2->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil dihapus!</div>');
        redirect('materi2');
    }
}
