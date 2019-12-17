<?php

class App_model extends CI_model
{
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();


        if ($password == $user['password']) {
            $data = [
                'user_id' => $user['id'],
                'username' => $user['username']
            ];
            $this->session->set_userdata($data);
            redirect('admin');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau password salah!</div>');
            redirect('auth');
        }
    }

    public function getMenu()
    {
        return $this->db->get('menu')->result_array();
    }
}
