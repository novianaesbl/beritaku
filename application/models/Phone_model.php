<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Phone_model extends CI_Model
{
    private $table = 'telpon';
    //menampilkan semua data kontak
    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
    }

    public function tambahDataPhone()
    {
        $data = array(
            'no_kontak' => $this->input->post('no_kontak', true),
            'nama_kontak' => $this->input->post('nama_kontak', true),
       );
        $this->db->insert('telpon', $data);
    }

    public function hapusDataKategori($no_kontak)
    {
        $this->db->where('no_kontak',$no_kontak);
        $this->db->delete('telpon');
    }

    public function getPhoneById($no_kontak)
    {
        return $this->db->get_where('telpon', ['no_kontak' => $no_kontak])->row_array();
        
    }

    public function ubahDataPhone($no_kontak)
    {
        $data = array(
            'no_kontak' => $this->input->post('no_kontak', true),
            'nama_kontak' => $this->input->post('nama_kontak', true),
        );
        $this->db->where('no_kontak',$no_kontak);
        $this->db->update('telpon', $data);
    }
}
