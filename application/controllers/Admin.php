<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login_now()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin_data = $this->Admin_model->get_admin_by_username($email);

        if ($admin_data) {
            if (password_verify($password, $admin_data['password'])) {
                $_SESSION['admin_id'] = $admin_data['admin_id'];
                $_SESSION['email'] = $admin_data['email'];
                $_SESSION['password'] = $admin_data['password'];
                redirect(base_url() . 'admin/dashboard');
            } else {
                $_SESSION['error'] = 'Invalid username or password.';
                redirect(base_url() . "admin");
            }
        } else {
            $_SESSION['error'] = 'Invalid username or password';
            redirect(base_url() . "admin");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }

    protected function navbar()
    {
        $admin_id = $this->session->userdata('admin_id');
        $data['admin'] = $this->Admin_model->getAdminById($admin_id);
        $admin_data['admin'] = $this->Admin_model->get_admin_by_id($admin_id);
        $this->load->view("admin/navbar", $data, $admin_data);
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
        $data['category'] = $this->My_model->select("category");
        $this->load->view("admin/category", $data);
        $this->footer();
    }
    public function save_category()
    {
        $this->My_model->insert("category", $_POST);
        redirect("admin/category");
    }
    public function edit_category($id)
    {
        $this->navbar();
        $cond = ['category_id' => $id];
        $data['category_data'] = $this->My_model->select_where("category", $cond)[0];
        $this->load->view("admin/edit_category", $data);
        $this->footer();
    }
    public function update()
    {
        $cond = ['category_id' => $_POST['category_id']];
        $this->My_model->update("category", $cond, $_POST);
        redirect("admin/category");
    }
    public function delete($id)
    {
        $cond = ['category_id' => $id];
        $this->My_model->delete("category", $cond);
        redirect("admin/category");
    }
    // Category CRUD End
    public function rooms()
    {
        $data["category"] = $this->My_model->select("category");
        $this->navbar();
        $this->load->view("admin/rooms", $data);
        $this->footer();
    }

    public function save_rooms()
    {
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        if ($_FILES['rooms_main_image']['name'] != '') {
            $filename = time() . $_FILES['rooms_main_image']['name'];
            move_uploaded_file($_FILES["rooms_main_image"]['tmp_name'], "uploads/" . $filename);
            $_POST["rooms_main_image"] = $filename;
        }
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

    public function rooms_list()
    {
        $this->navbar();
        $this->load->view("admin/rooms_list");
        $this->footer();
    }
    protected function footer()
    {
        $this->load->view("admin/footer");
    }
}
