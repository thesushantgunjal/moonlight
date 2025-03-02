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

    public function rooms()
    {
        $this->navbar();
        $this->load->view("in/rooms");
        $this->footer();
    }

    public function restaurant()
    {
        $this->navbar();
        $this->load->view("in/restaurant");
        $this->footer();
    }

    public function about()
    {
        $this->navbar();
        $this->load->view("in/about");
        $this->footer();
    }

    public function contact()
    {
        $this->navbar();
        $this->load->view("in/contact");
        $this->footer();
    }

    public function sign_in()
    {
        $this->navbar();
        $this->load->view("in/sign_in");
        $this->footer();
    }
}
