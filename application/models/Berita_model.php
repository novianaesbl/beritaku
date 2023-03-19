<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    private $table = 'tb_kategori';
    //menampilkan semua data kontak
    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
    }

    public function tambahDataKategori()
    {
        $data = array(
            'kategori' => $this->input->post('kategori', true)
       );
        $this->db->insert('tb_kategori', $data);
    }

    public function hapusDataKategori($id_kategori)
    {
        $this->db->where('id_kategori',$id_kategori);
        $this->db->delete('tb_kategori');
    }

    public function getKategoriById($id_kategori)
    {
        return $this->db->get_where('tb_kategori', ['id_kategori' => $id_kategori])->row_array();
        
    }

    public function ubahDataKategori($id_kategori)
    {
        $data = array(
            'kategori' => $this->input->post('kategori', true),
        );
        $this->db->where('id_kategori',$id_kategori);
        $this->db->update('tb_kategori', $data);
    }
}
