<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('App_model', 'model');
        $this->load->model('Materi1_model', 'materi1');
    }
    public function index()
    {
        $data['title'] = 'Huruf Hijaiyah dan Angka Arab';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi1->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi1/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Materi Huruf Hijaiyah dan Angka Arab';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi1->getMateri();

        $this->load->view('templates/header', $data);
        $this->load->view('materi1/tambah');
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Materi Huruf Hijaiyah dan Angka Arab';
        $data['menu'] = $this->model->getMenu();
        $data['materi'] = $this->materi1->getMateriId($id);

        $this->load->view('templates/header', $data);
        $this->load->view('materi1/ubah');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $this->materi1->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil ditambah!</div>');
        redirect('materi1');
    }

    public function update($id)
    {
        $this->materi1->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
        redirect('materi1');
    }

    public function delete($id)
    {
        $this->materi1->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil dihapus!</div>');
        redirect('materi1');
    }
}
