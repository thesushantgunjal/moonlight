<?php
defined('BASEPATH') or exit('No direct script access allowed');

class In extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); // Load Validation Library
        // Load the form helper
        $this->load->helper('form');
    }

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

    public function login_now()
    {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|numeric|exact_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[users.email]', [
            'is_unique' => 'This email is already registered.'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the form with errors
            $this->load->view('in/sign_up');
        } else {
            // Collect form data
            $data = [
                'name'     => $this->input->post('name', true),
                'phone'    => $this->input->post('phone', true),
                'email'    => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password', true), PASSWORD_BCRYPT), // Securely hash password
            ];

            // Insert data into database
            if ($this->Admin_model->register_user($data)) {
                $this->session->set_flashdata('success', 'Account created successfully! Please login.');
                redirect('in/sign_in');
            } else {
                $this->session->set_flashdata('error', 'Something went wrong! Try again.');
                redirect('in/sign_up');
            }
        }
    }


    public function do_login()
    {
        // Set validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the login form with errors
            $this->load->view('in/sign_in');
        } else {
            $email    = $this->input->post('email', true);
            $password = $this->input->post('password', true);

            // Check if user exists
            $user = $this->Admin_model->get_user_by_email($email);

            if ($user && password_verify($password, $user->password)) {
                // Set session data
                $session_data = [
                    'user_id'  => $user->user_id,
                    'user_name' => $user->name,
                    'user_email' => $user->email,
                    'logged_in' => true
                ];
                $this->session->set_userdata($session_data);

                // Redirect to dashboard or home
                redirect(base_url('in/personal_profile'));
            } else {
                $this->session->set_flashdata('error', 'Invalid Email or Password');
                redirect('in/sign_in');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(['user_id', 'user_name', 'user_email', 'logged_in']);
        $this->session->sess_destroy();
        redirect('in/sign_in');
    }


    public function booked_rooms_overview()
    {
        $this->navbar();
        $this->load->view('in/booked_rooms_overview');
        $this->footer();
    }

    public function personal_profile()
    {
        $this->navbar();
        $this->load->view('in/personal_profile');
        $this->footer();
    }
    public function check_availability()
    {
        $data["category"] = $this->My_model->select("category");

        $this->navbar();

        // Default empty rooms array
        $data['rooms'] = [];

        // Check if form is submitted
        if ($this->input->post()) {
            $check_in_date = $this->input->post('check_in_date');
            $check_out_date = $this->input->post('check_out_date');
            $category_id = $this->input->post('category_id');

            $rooms = $this->My_model->getAvailableRooms($check_in_date, $check_out_date, $category_id);

            foreach ($rooms as &$room) {
                $total_price = 0;
                $current_date = strtotime($check_in_date);
                $end_date = strtotime($check_out_date);

                while ($current_date <= $end_date) {
                    $day_of_week = date('N', $current_date); // 1 (Monday) to 7 (Sunday)

                    if ($day_of_week == 6 || $day_of_week == 7) {
                        // Weekend Price
                        $total_price += $room['mon_to_fri_rate'];
                    } else {
                        // Weekday Price
                        $total_price +=  $room['sat_to_sun_rate'];
                    }

                    $current_date = strtotime("+1 day", $current_date);
                }

                $room['total_price'] = $total_price; // Add total price to the room array
            }

            $data['rooms'] = $rooms;
        }

        $this->load->view("in/check_availability", $data);
        $this->footer();
    }




    public function complete_reservation()
    {
        $this->navbar();
        $this->load->view("in/complete_reservation", $data);
        $this->footer();
    }
    protected function footer()
    {
        $this->load->view("in/footer");
    }
}
