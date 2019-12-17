<?php

class Materi4_model extends CI_model
{
    public function getMateri()
    {
        return $this->db->get('materi4')->result_array();
    }

    public function getMateriId($id)
    {
        return $this->db->get_where('materi4', array('id' => $id))->row_array();
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

        $this->db->insert('materi4', [
            'image' => $image['name'],
            'deskripsi' => $this->input->post('deskripsi'),
            'menu_id' => 1
        ]);
    }

    public function update($id)
    {
        $old = $this->db->get_where('materi4', ['id' => $id])->row_array();

        $config = array();
        $config['upload_path'] = './upload/img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '5000';
        $this->load->library('upload', $config, 'image');
        $this->image->initialize($config);
        $image['upload'] = $this->image->do_upload('image');
        $image['name'] = $this->image->data('file_name');

        $old_image = $old['image'];
        unlink(FCPATH . 'upload/img/' . $old_image);

        $data = array(
            'image' => $image['name'],
            'deskripsi' => $this->input->post('deskripsi')
        );

        $this->db->where('id', $id);
        $this->db->update('materi4', $data);
    }

    public function delete($id)
    {
        $this->db->delete('materi4', array('id' => $id));
    }
}
