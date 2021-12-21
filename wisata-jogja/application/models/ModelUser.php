<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function getUser()
    {
        return $this->db->get('user');
    }

    public function tambahkomentar($data = null)
    {
        $this->db->insert('komentar', $data);
    }

    public function getkomentar()
    {
        return $this->db->get('komentar');
    }
}
