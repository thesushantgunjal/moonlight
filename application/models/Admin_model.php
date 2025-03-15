<?php
class Admin_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validation_admin($email, $password)
    {
        $this->db->where("email", $email);
        $this->db->where("password", $password);

        $query = $this->db->get('admin');

        if ($query->num_rows() > 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function getAdminById($admin_id)
    {
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get('admin');
        return $query->row();
    }

    public function get_admin_by_username($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('admin');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return false;
    }

    public function get_admin_by_id($admin_id)
    {
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get('admin');
        return $query->row_array();
    }

    public function update_admin_password($admin_id, $update_password)
    {
        $this->db->where('admin_id', $admin_id);
        return $this->db->update('admin', $update_password);
    }

    public function register_user($data)
    {
        return $this->db->insert('users', $data);
    }

    public function check_email_exists($email)
    {
        return $this->db->where('email', $email)->get('users')->num_rows() > 0;
    }

    public function get_user_by_email($email)
    {
        return $this->db->where('email', $email)->get('users')->row();
    }
}
