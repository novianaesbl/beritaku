<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Phone_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
		//teknik mengaktifkan tabel yang akan ditampilkan
		$data["title"] = "List Data Phonebook";
        //ambil fungsi getAll untuk menampilkan semua data phonebook
        $data["data_phonebook"] = $this->Phone_model->getAll();

		$this->load->view('template/header');
		$this->load->view('template/navigasi');
		$this->load->view('phone', $data);
		$this->load->view('template/footer');
	}

	public function tambah_data(){
		
		$data['judul']='Form Data Telepon';

        $this->form_validation->set_rules('no_kontak','No_kontak','required');
        $this->form_validation->set_rules('nama_kontak','Nama_kontak','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header', $data);
			$this->load->view('template/navigasi');
			$this->load->view('phone_tambahdata');
			$this->load->view('template/footer');
        }
        else
        {

			$no_kontak=$this->input->post('no_kontak');
			$nama_kontak=$this->input->post('nama_kontak');

            //kondisional data no_kontak
            //jika data no_kontak sudah ada
            // beri notif sdh ada -> direct lagi
            $cek = $this->db->query("SELECT * FROM telpon where no_kontak='".$this->input->post('no_kontak')."'")->num_rows();
            if ($cek<=0) 
            {
                //jika data no_kontak belum ada
                $this->Phone_model->tambahDataPhone();
                $this->session->set_flashdata('flash','DiTambahkan');
                redirect(base_url('phone'));
            }
            else
            {
                $this->session->set_flashdata('flash','gagal');
                redirect(base_url('phone'));
            }
        }
	}

	public function hapus_data($no_kontak)
    {
        $this->Phone_model->hapusDataPhone($no_kontak);
        $this->session->set_flashdata('flash','DiHapus');
        redirect('phone');
    }

	public function ubah_data($no_kontak)
    {
        $data['judul']='Form ubah Data Phone';
        $data['telpon']=$this->Phone_model->getPhoneById($no_kontak);

        $this->form_validation->set_rules('no_kontak','No_kontak','required');
        $this->form_validation->set_rules('nama_kontak','Nama_kontak','required');

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header',$data);
            $this->load->view('phone_ubahdata',$data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->Phone_model->ubahDataPhone($no_kontak);
            $this->session->set_flashdata('flash','DiUbah');
            redirect('phone');

        }
        
    }

}

