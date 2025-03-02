<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function navbar()
    {
        $this->load->view("admin/navbar");
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function dashboard()
    {
        $this->navbar();
        $this->load->view("admin/dashboard");
        $this->footer();
    }

    public function category()
    {
        $this->navbar();
        $this->load->view("admin/category");
        $this->footer();
    }
    public function rooms()
    {
        $this->navbar();
        $this->load->view("admin/rooms");
        $this->footer();
    }

    public function booked_rooms()
    {
        $this->navbar();
        $this->load->view("admin/booked_rooms");
        $this->footer();
    }

    public function check_in()
    {
        $this->navbar();
        $this->load->view("admin/check_in");
        $this->footer();
    }
    protected function footer()
    {
        $this->load->view("admin/footer");
    }
}
