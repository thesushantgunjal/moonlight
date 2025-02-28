<?php
defined('BASEPATH') or exit('No direct script access allowed');

class In extends CI_Controller
{
    protected function navbar()
    {
        $this->load->view("in/navbar");
    }
    protected function footer()
    {
        $this->load->view("in/footer");
    }
    public function index()
    {
        $this->navbar();
        $this->load->view('in/index');
        $this->footer();
    }
    public function login()
    {
        $this->navbar();
        $this->load->view('in/login');
        $this->footer();
    }
   
}
