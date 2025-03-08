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

    public function get_rooms_with_category()
    {
        $this->db->select("rooms.*, category.category_name");
        $this->db->from("rooms");
        $this->db->join("category", "category.category_id = rooms.category_id", "left");
        return $this->db->get()->result_array();
    }

    public function getAvailableRooms($check_in_date, $check_out_date, $category_id)
    {
        $sql = "SELECT rooms.*, category.category_name 
FROM rooms
LEFT JOIN category ON category.category_id = rooms.category_id
WHERE rooms.category_id = ?
AND rooms.booking_status = 'Available' 
AND rooms.rooms_id NOT IN (
    SELECT bookings.rooms_id 
    FROM bookings 
    WHERE bookings.status = 'Confirm' 
    AND (
        (? BETWEEN bookings.check_in_date AND bookings.check_out_date) OR
        (? BETWEEN bookings.check_in_date AND bookings.check_out_date) OR
        (bookings.check_in_date BETWEEN ? AND ?) OR
        (bookings.check_out_date BETWEEN ? AND ?)
    )
);
";

        $query = $this->db->query($sql, [
            $category_id,
            $check_in_date,
            $check_out_date,
            $check_in_date,
            $check_out_date,
            $check_in_date,
            $check_out_date
        ]);

        return $query->result_array();
    }
}
