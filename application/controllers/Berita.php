<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Berita_model');
        $this->load->model('Artikel_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navigasi');
		$this->load->view('berita');
		$this->load->view('template/footer'); 
	}
	public function kategori()
	{
        $data["data_kategori"] = $this->Berita_model->getAll();

        $data['judul']='Form Data Kategori';
        $this->form_validation->set_rules('kategori','Kategori','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header', $data);
			$this->load->view('template/navigasi');
			$this->load->view('kategori');
			$this->load->view('template/footer');
        }
        else
        {
            $cek = $this->db->query("SELECT * FROM tb_kategori where kategori='".$this->input->post('kategori')."'")->num_rows();
            if ($cek<=0) 
            {
                //jika data kategori belum ada
                $this->Berita_model->tambahDataKategori();
                $this->session->set_flashdata('flash','DiTambahkan');
                redirect(base_url('berita/kategori'));
            }
            else
            {
                $this->session->set_flashdata('flash','gagal');
                redirect(base_url('berita/kategori'));
            }
        }
	}
    public function simpan(){	
		$data['judul']='Form Data Kategori';
        $this->form_validation->set_rules('kategori','Kategori','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header', $data);
			$this->load->view('template/navigasi');
			$this->load->view('kategori');
			$this->load->view('template/footer');
        }
        else
        {
            $cek = $this->db->query("SELECT * FROM tb_kategori where kategori='".$this->input->post('kategori')."'")->num_rows();
            if ($cek<=0) 
            {
                //jika data kategori belum ada
                $this->Berita_model->tambahDataKategori();
                $this->session->set_flashdata('flash','DiTambahkan');
                redirect(base_url('kategori'));
            }
            else
            {
                $this->session->set_flashdata('flash','gagal! nama kategori sudah ada');
                redirect(base_url('kategori'));
            }
        }
	}

    public function hapus_data($id_kategori)
    {
        $this->Berita_model->hapusDataKategori($id_kategori);
        $this->session->set_flashdata('flash','DiHapus');
        redirect('berita/kategori');
    }

    public function ubah_data($id_kategori)
    {
        $data['judul']='Form ubah Data Kategori';
        $data['data_kategori']=$this->Berita_model->getKategoriById($id_kategori);

        $this->form_validation->set_rules('kategori','Kategori','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header',$data);
            $this->load->view('kategori_ubahdata',$data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->Berita_model->ubahDataKategori($id_kategori);
            $this->session->set_flashdata('flash','DiUbah');
            redirect('berita/kategori');
        }
        
    }

    //ARTIKEL
    public function artikel()
	{
        $data["data_kategori"] = $this->Berita_model->getAll();
        $data["data_artikel"] = $this->Artikel_model->getAll();

        $data['judul']='Form Data artikel';
        $this->form_validation->set_rules('kategori','Kategori','required');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header', $data);
			$this->load->view('template/navigasi');
			$this->load->view('artikel');
			$this->load->view('template/footer');
        }
        else
        {
            $cek = $this->db->query("SELECT * FROM tb_artikel where judul='".$this->input->post('judul')."'")->num_rows();
            if ($cek<=0) 
            {
                //jika data artikel belum ada
                $this->Artikel_model->tambahDataartikel();
                $this->session->set_flashdata('flash','DiTambahkan');
                redirect(base_url('berita/artikel'));
            }
            else
            {
                $this->session->set_flashdata('flash','gagal');
                redirect(base_url('berita/artikel'));
            }
        }
	}
    public function simpan_artikel(){	
		$data['judul']='Form Data artikel';
        $this->form_validation->set_rules('kategori','Kategori','required');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header', $data);
			$this->load->view('template/navigasi');
			$this->load->view('artikel');
			$this->load->view('template/footer');
        }
        else
        {
            $cek = $this->db->query("SELECT * FROM tb_artikel where judul='".$this->input->post('judul')."'")->num_rows();
            if ($cek<=0) 
            {
                //jika data artikel belum ada
                $this->Berita_model->tambahDataartikel();
                $this->session->set_flashdata('flash','DiTambahkan');
                redirect(base_url('berita/artikel'));
            }
            else
            {
                $this->session->set_flashdata('flash','gagal! nama artikel sudah ada');
                redirect(base_url('berita/artikel'));
            }
        }
	}

    public function hapus_data_artikel($id_artikel)
    {
        $this->Artikel_model->hapusDataartikel($id_artikel);
        $this->session->set_flashdata('flash','DiHapus');
        redirect('berita/artikel');
    }

    public function ubah_data_artikel($id_artikel)
    {
        $data['judul']='Form ubah Data artikel';
        $data['data_artikel']=$this->Artikel_model->getartikelById($id_artikel);

        $this->form_validation->set_rules('kategori','Kategori','required');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('isi','Isi','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header',$data);
            $this->load->view('artikel_ubahdata',$data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->Artikel_model->ubahDataartikel($id_artikel);
            $this->session->set_flashdata('flash','DiUbah');
            redirect('berita/artikel');
        }
        
    }
}
