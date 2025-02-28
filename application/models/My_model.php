<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_model extends CI_Model
{
    public function insert($tname, $data)
    {
        $this->db->insert($tname, $data);
    }

    public function select($tname)
    {
        return $this->db->get($tname)->result_array();
    }

    public function select_where($tname, $cond)
    {
        return $this->db->where($cond)->get($tname)->result_array();
    }

    public function update($tname, $cond, $data)
    {
        $this->db->where($cond)->update($tname, $data);
    }

    public function delete($tname, $cond)
    {
        return $this->db->where($cond)->delete($tname);
    }
}
