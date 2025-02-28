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

    protected function footer()
    {
        $this->load->view("admin/footer");
    }
}
