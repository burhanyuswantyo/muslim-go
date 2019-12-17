<?php

class Materi1_model extends CI_model
{
    public function getMateri()
    {
        return $this->db->get('Materi1')->result_array();
    }

    public function getMateriId($id)
    {
        return $this->db->get_where('materi1', array('id' => $id))->row_array();
    }

    public function insert()
    {
        $config = array();
        $config['upload_path'] = './upload/img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'image');
        $this->image->initialize($config);
        $image['upload'] = $this->image->do_upload('image');
        $image['name'] = $this->image->data('file_name');

        $config = array();
        $config['upload_path'] = './upload/audio/';
        $config['allowed_types'] = 'mpeg|mp3';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'audio');
        $this->audio->initialize($config);
        $audio['upload'] = $this->audio->do_upload('audio');
        $audio['name'] = $this->audio->data('file_name');

        $this->db->insert('materi1', [
            'image' => $image['name'],
            'audio' => $audio['name'],
            'deskripsi' => $this->input->post('deskripsi'),
            'menu_id' => 1
        ]);
    }

    public function update($id)
    {
        $old = $this->db->get_where('materi1', ['id' => $id])->row_array();

        $config = array();
        $config['upload_path'] = './upload/img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'image');
        $this->image->initialize($config);
        $image['upload'] = $this->image->do_upload('image');
        $image['name'] = $this->image->data('file_name');

        $config = array();
        $config['upload_path'] = './upload/audio/';
        $config['allowed_types'] = 'mpeg|mp3';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'audio');
        $this->audio->initialize($config);
        $audio['upload'] = $this->audio->do_upload('audio');
        $audio['name'] = $this->audio->data('file_name');

        $old_image = $old['image'];
        unlink(FCPATH . 'upload/img/' . $old_image);
        $old_audio = $old['audio'];
        unlink(FCPATH . 'upload/audio/' . $old_audio);

        $data = array(
            'image' => $image['name'],
            'audio' => $audio['name'],
            'deskripsi' => $this->input->post('deskripsi')
        );

        $this->db->where('id', $id);
        $this->db->update('materi1', $data);
    }

    public function delete($id)
    {
        $this->db->delete('materi1', array('id' => $id));
    }
}
