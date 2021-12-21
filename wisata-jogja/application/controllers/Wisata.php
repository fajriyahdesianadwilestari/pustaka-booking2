<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Wisata extends CI_Controller
{
    public function index()
    {
        $data['wisata_umum'] = $this->Modelwisata->getwisata()->result_array();
        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('wisata/index', $data);
        $this->load->view('templates/footer');
    }

    public function sejarah()
    {
        $data['judul'] = 'Sejarah';
        $this->load->view('templates/header', $data);
        $this->load->view('wisata/wisata-sejarah', $data);
        $this->load->view('templates/footer');
    }

    public function belanja_kuliner()
    {
        $data['judul'] = 'Belanja & Kuliner';
        $this->load->view('templates/header', $data);
        $this->load->view('wisata/belanja-kuliner', $data);
        $this->load->view('templates/footer');
    }

    public function komentar()
    {
        cek_login();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Komentar';
        $this->form_validation->set_rules('komentar', 'komentar', 'required|min_length[4]', [
            'required' => 'Komentar harus diisi',
            'min_length' => 'Komentar terlalu pendek'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('wisata/komentar', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'komentar' => $this->input->post('komentar', true)
            ];
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Komentar Berhasil Dikirim<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            $this->ModelUser->tambahkomentar($data);
            redirect('wisata/komentar');
        }
    }
}
