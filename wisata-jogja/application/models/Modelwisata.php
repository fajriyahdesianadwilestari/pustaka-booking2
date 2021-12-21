<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Modelwisata extends CI_Model
{
    public function getwisata()
    {
        return $this->db->get('wisata');
    }

    public function tambahdata($data = null)
    {
        $this->db->insert('wisata', $data);
    }

    public function hapuswisata($where = null)
    {
        $this->db->delete('wisata', $where);
    }

    public function wisataWhere($where)
    {
        return $this->db->get_where('wisata', $where);
    }

    public function update_pariwisata($data = null, $where = null)
    {
        $this->db->update('wisata', $data, $where);
    }
}
