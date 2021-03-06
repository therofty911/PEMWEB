<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $data['title'] = 'Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('auth/auth_home', $data);
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login | Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $this->load->view('auth/auth_login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        // $user = $this->db->get_where('account', ['Email' => $email])->row_array();
        $user = $this->Auth_model->get_email($email, $password);

        // var_dump($user);
        // die;

        if ($user) {
            if (password_verify($password, $user->Password)) {
                // $data = [
                //     'username' => $user['username'],
                //     'role_id' => $user['role_id']
                // ];
                // $this->session->set_userdata($data);
                $data = array(
                    'email' => $user->Email,
                    'fname' => $user->First_Name,
                    'role' => $user->Role,
                    'id' => $user->Account_ID
                );
                $this->session->set_userdata($data);
                if ($user->Role == 'admin' || $user->Role == 'management') {
                    redirect('home/facilityDash');
                } else {
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('error_log', '<div class="alert alert-danger alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Warning!</strong>Wrong password or email</div>');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('error_log', '<div class="alert alert-danger alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Warning!</strong>Wrong password or email</div>');
            redirect('auth/login');
        }
    }

    // private function _login()
    // {
    //     $email = $this->input->post('email');
    //     $hash = $this->input->post('password');
    //     $password = md5($hash);

    //     // $user = $this->db->get_where('tugas1_login', ['username' => $username])->row_array();
    //     $user = $this->Auth_model->get_email($email);
    //     if ($user) {
    //         if ($password == $user->password) {
    //             // $data = [
    //             //     'username' => $user['username'],
    //             //     'role_id' => $user['role_id']
    //             // ];
    //             // $this->session->set_userdata($data);
    //             $data = array(
    //                 'Email' => $user->email,
    //                 'Role' => $user->Role
    //             );
    //             $this->session->set_userdata($data);
    //             if ($user->role_id == 'admin') {
    //                 redirect('admin/table_admin');
    //             } else {
    //                 redirect('user/table_user');
    //             }
    //         } else {
    //             $this->session->set_flashdata('message_login', '<div class="alert alert-danger" role="alert">wrong email n password</div>');
    //             redirect('auth');
    //         }
    //     } else {
    //         $this->session->set_flashdata('message_login', '<div class="alert alert-danger" role="alert">wrong email n password</div>');
    //         redirect('auth');
    //     }
    // }

    public function registration()
    {
        $this->form_validation->set_rules('fname', 'Firstname', 'required|trim');
        $this->form_validation->set_rules('lname', 'Lastname', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register | Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $this->load->view('auth/auth_regis', $data);
        } else {
            $data = [
                'First_Name' => htmlspecialchars($this->input->post('fname', true)),
                'Last_Name' => htmlspecialchars($this->input->post('lname', true)),
                'Email' => htmlspecialchars($this->input->post('email', true)),
                'Password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'Role' => "user",
            ];
            // $this->Auth_model->regis($data);
            $this->db->insert('account', $data);

            $this->session->set_flashdata('success_reg', '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>success!</strong> Nice, you are now registered </div>');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('success_logout', '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>success!</strong> You have been logged out, see you soon</div>');

        redirect('auth/login');
    }
}
