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
    // Category CRUD Start
    public function category()
    {
        $this->navbar();
        $data['category']=$this->My_model->select("category");
        $this->load->view("admin/category",$data);
        $this->footer();
    }
    public function save_category()
    {
        $this->My_model->insert("category",$_POST);
        redirect("admin/category");
    }
    public function edit_category($id)
    {
        $this->navbar();
        $cond=['category_id'=>$id];
        $data['category_data']=$this->My_model->select_where("category",$cond)[0];
        $this->load->view("admin/edit_category",$data);
        $this->footer();
    }
    public function update()
    {
        $cond=['category_id'=>$_POST['category_id']];
        $this->My_model->update("category",$cond,$_POST);
        redirect("admin/category");
    }
    public function delete($id)
    {
        $cond=['category_id'=>$id];
        $this->My_model->delete("category",$cond);
        redirect("admin/category");
    }
    // Category CRUD End
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
