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

    public function login_users()
    {
        $this->navbar();
        $data['users'] = $this->My_model->select("users");
        $this->load->view("admin/login_users", $data);
        $this->footer();
    }

    public function login_user_delete($user_id)
    {
        $cond = [$user_id => "user_id"];
        $this->My_model->delete("users", $cond);
        redirect(base_url() . "admin/login_users");
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

    public function edit_category($category_id)
    {
        $this->navbar();
        $cond = ['category_id' => $category_id];
        $data['category_data'] = $this->My_model->select_where("category", $cond)[0];
        $this->load->view("admin/edit_category", $data);
        $this->footer();
    }

    public function category_update()
    {
        $cond = ['category_id' => $_POST['category_id']];
        $this->My_model->update("category", $cond, $_POST);
        redirect("admin/category");
    }


    public function category_delete($category_id)
    {
        $cond = [$category_id => "category_id"];
        $this->My_model->delete("category", $cond);
        redirect(base_url() . "admin/category");
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
        if (isset($_POST['rooms_facility']) && is_array($_POST['rooms_facility'])) {
            $_POST['rooms_facility'] = implode(', ', $_POST['rooms_facility']);
        }

        $image_fields = ['rooms_main_image', 'rooms_image1', 'rooms_image2', 'rooms_image3', 'rooms_image4'];

        foreach ($image_fields as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $filename = time() . $_FILES[$field]['name'];
                move_uploaded_file($_FILES[$field]['tmp_name'], "uploads/" . $filename);
                $_POST[$field] = $filename;
            }
        }

        $this->My_model->insert("rooms", $_POST);
        redirect(base_url() . "admin/rooms");
    }

    public function rooms_list()
    {

        $data["rooms"] = $this->My_model->get_rooms_with_category();
        $this->navbar();
        $this->load->view("admin/rooms_list", $data);
        $this->footer();
    }

    public function edit_rooms($rooms_id)
    {
        $data["rooms"] = $this->My_model->select_where("rooms", ["rooms_id" => $rooms_id]);
        $data["category"] = $this->My_model->select_where("category", []);
        $this->navbar();
        $this->load->view("admin/edit_rooms", $data);
        $this->footer();
    }

    public function update_rooms()
    {
        if (isset($_POST['rooms_facility']) && is_array($_POST['rooms_facility'])) {
            $_POST['rooms_facility'] = implode(', ', $_POST['rooms_facility']);
        }

        $image_fields = ['rooms_main_image', 'rooms_image1', 'rooms_image2', 'rooms_image3', 'rooms_image4'];

        foreach ($image_fields as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $filename = time() . '_' . $_FILES[$field]['name'];
                move_uploaded_file($_FILES[$field]['tmp_name'], "uploads/" . $filename);
                $_POST[$field] = $filename;
            }
        }

        $cond = ['rooms_id' => $_POST['rooms_id']];
        $this->My_model->update("rooms", $cond, $_POST);
        redirect(base_url() . "admin/rooms_list");
    }

    public function delete_rooms($rooms_id)
    {
        $cond = ["rooms_id" => $rooms_id];
        $this->My_model->delete("rooms", $cond);
        redirect(base_url() . "admin/rooms_list");
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
