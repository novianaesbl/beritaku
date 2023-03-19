<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
    private $table = 'tb_artikel';
    //menampilkan semua data kontak
    public function getAll()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
    }

    public function tambahDataartikel()
    {
        $data = array(
            'kategori' => $this->input->post('kategori', true),
            'judul' => $this->input->post('judul', true),
            'isi' => $this->input->post('isi', true)
       );
        $this->db->insert('tb_artikel', $data);
    }

    public function hapusDataartikel($id_artikel)
    {
        $this->db->where('id_artikel',$id_artikel);
        $this->db->delete('tb_artikel');
    }

    public function getartikelById($id_artikel)
    {
        return $this->db->get_where('tb_artikel', ['id_artikel' => $id_artikel])->row_array();
        
    }

    public function ubahDataartikel($id_artikel)
    {
        $data = array(
            'kategori' => $this->input->post('kategori', true),
            'judul' => $this->input->post('judul', true),
            'isi' => $this->input->post('isi', true)
        );
        $this->db->where('id_artikel',$id_artikel);
        $this->db->update('tb_artikel', $data);
    }
}
