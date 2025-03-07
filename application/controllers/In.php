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
    // new user CRUD
    public function save_user()
    {
        $this->My_model->insert("signup", $_POST);
        redirect(base_url());
    }

    public function do_login()
    {
        // print_r($_POST);
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $data = $this->My_model->select_where("signup", $_POST);
            // print_r($data[0]);
            if (isset($data[0]['register_id'])) {
                // echo "yes";
                $_SESSION['register_id'] = $data[0]['register_id'];
                redirect(base_url('in/user_dashboard'));
            } else {
?>
                <script>
                    alert('Invalid Email & Password')
                </script>
<?php
                redirect(base_url('in/sign_in'));
            }
        } else {
            echo "Invalid Credentials";
        }
    }
    // new user CRUD end
    public function user_dashboard()
    {
        $this->navbar();
        $this->load->view('in/user_dashboard');
        $this->footer();
    }

    public function check_availability()
    {
        $check_in_date = $this->input->post('check_in_date');
        $check_out_date = $this->input->post('check_out_date');
        $category_id = $this->input->post('category_id');

        // Get available rooms
        $available_rooms = $this->My_model->getAvailableRooms($check_in_date, $check_out_date, $category_id);

        // Load view with available rooms
        $data["rooms"] = $available_rooms;

        echo "<pre>";
        print_r($data);
        // $this->navbar();
        $this->load->view("in/check_availability");
        $this->footer();
       
    }


    // public function check_availability()
    // {
    //     $category_id = $this->input->post('category_id');
    //     $check_in_date = $this->input->post('check_in_date');
    //     $check_out_date = $this->input->post('check_out_date');

    //     // Query to get available rooms
    //     $this->db->where('category_id', $category_id);
    //     $this->db->where("rooms_id NOT IN (
    //         SELECT rooms_id FROM bookings 
    //         WHERE status != 'Cancelled' 
    //         AND (
    //             ('$check_in_date' BETWEEN check_in_date AND check_out_date) OR 
    //             ('$check_out_date' BETWEEN check_in_date AND check_out_date) OR
    //             (check_in_date BETWEEN '$check_in_date' AND '$check_out_date') OR
    //             (check_out_date BETWEEN '$check_in_date' AND '$check_out_date')
    //         )
    //     )", NULL, FALSE);

    //     $query = $this->db->get('rooms');
    //     $data["rooms"] = $query->result_array();

    //     // Return JSON response for AJAX requests
    //     if ($this->input->is_ajax_request()) {
    //         echo json_encode($data["rooms"]);
    //         return;
    //     }
      
    //     // Load view with available rooms
    //     $this->navbar();
    //     $this->load->view("in/check_availability", $data);
    //     $this->footer();
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    // }


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
