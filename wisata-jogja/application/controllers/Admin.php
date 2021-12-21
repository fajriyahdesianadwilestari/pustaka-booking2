<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        cek_user();
    }

    public function index()
    {
        $data['wisata'] = $this->Modelwisata->getwisata()->result_array();
        $data['judul'] = 'Admin Pariwisata Jogja';
        $this->form_validation->set_rules('nama_wisata', 'Nama Pariwisata', 'required|min_length[3]', [
            'required' => 'Nama Pariwisata harus diisi',
            'min_length' => 'Nama Pariwisata terlalu pendek'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|min_length[3]', [
            'required' => 'deskripsi harus diisi',
            'min_length' => 'deskripsi terlalu pendek'
        ]);
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin_footer');
        } else {
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                $image = $gambar['file_name'];
            } else {
                $image = '';
            }
            $data = [
                'nama_wisata' => $this->input->post('nama_wisata', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'gambar' => $image
            ];
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pariwisata Berhasil Ditambahkan<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            $this->Modelwisata->tambahdata($data);
            redirect('admin');
        }
    }

    public function hapus_wisata()
    {
        $where = ['id_wisata' => $this->uri->segment(3)];
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Pariwisata Berhasil Di Hapus !!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        $this->Modelwisata->hapuswisata($where);
        redirect('admin');
    }

    public function editpariwisata()
    {
        $data['judul'] = 'Ubah Data Pariwisata';
        $data['wisata'] = $this->Modelwisata->wisataWhere(['id_wisata' => $this->uri->segment(3)])->result_array();
        $this->form_validation->set_rules('nama_wisata', 'Nama Pariwisata', 'required|min_length[3]', [
            'required' => 'Nama Wisata harus diisi',
            'min_length' => 'Nama Wisata terlalu pendek'
        ]);
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|min_length[3]', [
            'required' => 'deskripsi harus diisi',
            'min_length' => 'deskripsi terlalu pendek'
        ]);
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();
        //memuat atau memanggil library upload
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/ubah-wisata', $data);
            $this->load->view('templates/admin_footer');
        } else {
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $image = $gambar['file_name'];
            } else {
                $image = $this->input->post('old_pict', TRUE);
            }
            $data = [
                'nama_wisata' => $this->input->post('nama_wisata', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'gambar' => $image
            ];

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data Pariwisata Berhasil Diubah !!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            $this->Modelwisata->update_pariwisata($data, ['id_wisata' => $this->input->post('id_wisata')]);
            redirect('admin');
        }
    }

    public function data_anggota()
    {
        $data['anggota'] = $this->ModelUser->getUser()->result_array();
        $data['judul'] = 'Data Anggota';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/data-anggota', $data);
        $this->load->view('templates/admin_footer');
    }

    public function data_komentar()
    {
        $data['komentar'] = $this->ModelUser->getkomentar()->result_array();
        $data['judul'] = 'Data Komentar';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/data-komentar', $data);
        $this->load->view('templates/admin_footer');
    }
}
