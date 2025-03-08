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

        // Convert dates to DateTime objects
        $check_in = new DateTime($check_in_date);
        $check_out = new DateTime($check_out_date);

        // Ensure check-in is at 12:00 PM and check-out is at 10:00 AM
        $check_in->setTime(12, 0);
        $check_out->setTime(10, 0);

        // Calculate the total number of 22-hour days
        $interval = $check_in->diff($check_out);
        $total_days = $interval->days;

        // Get available rooms
        $available_rooms = $this->My_model->getAvailableRooms($check_in_date, $check_out_date, $category_id);
        
        $total_price = 0;

        foreach ($available_rooms as &$room) {
            $mon_to_fri_rate = $room['mon_to_fri_rate'];
            $sat_to_sun_rate = $room['sat_to_sun_rate'];

            $current_date = clone $check_in;
            for ($i = 0; $i < $total_days; $i++) {
                $day_of_week = $current_date->format('N'); // 1 = Monday, 7 = Sunday

                if ($day_of_week >= 1 && $day_of_week <= 5) {
                    $total_price += $mon_to_fri_rate;
                } else {
                    $total_price += $sat_to_sun_rate;
                }

                // Move to the next day
                $current_date->modify('+1 day');
            }

            $room['total_price'] = $total_price;
        }

        $data["rooms"] = $available_rooms;
        $data["category"] = $this->My_model->select("category");
        $this->navbar();
        $this->load->view("in/check_availability", $data);
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
