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
        $data["category"] = $this->My_model->select("category");
        $this->navbar();
        $this->load->view('in/index', $data);
        $this->footer();
    }
    public function about()
    {
        $this->navbar();
        $this->load->view("in/about");
        $this->footer();
    }

    public function rooms()
    {
        $this->navbar();
        $this->load->view("in/rooms");
        $this->footer();
    }
    public function room_detail()
    {
        $this->navbar();
        $this->load->view("in/room_detail");
        $this->footer();
    }
    public function services()
    {
        $this->navbar();
        $this->load->view("in/services");
        $this->footer();
    }

    public function gallery()
    {
        $this->navbar();
        $this->load->view("in/gallery");
        $this->footer();
    }


    // public function restaurant()
    // {
    //     $this->navbar();
    //     $this->load->view("in/restaurant");
    //     $this->footer();
    // }

    public function contact()
    {
        $this->navbar();
        $this->load->view("in/contact");
        $this->footer();
    }

    public function sign_in()
    {
        $this->load->view("in/sign_in");
    }

    public function sign_up()
    {
        $this->load->view('in/sign_up');
    }


    public function check_availability()
    {
        $this->navbar();
        $this->load->view("in/check_availability");
        $this->footer();
    }

    public function complete_reservation()
    {
        $this->navbar();
        $this->load->view("in/complete_reservation");
        $this->footer();
    }
    protected function footer()
    {
        $this->load->view("in/footer");
    }
}
