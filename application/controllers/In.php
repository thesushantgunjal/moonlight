<?php
defined('BASEPATH') or exit('No direct script access allowed');

class In extends CI_Controller
{
    protected function navbar()
    {
        $this->load->view("in/navbar");
    }
    public function index()
    {
        $this->navbar();
        $this->load->view('in/index');
        $this->footer();
    }

    protected function footer()
    {
        $this->load->view("in/footer");
    }
}
