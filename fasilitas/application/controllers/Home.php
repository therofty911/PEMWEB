<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        // ntar di ubah lagi aja
        // if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'management') {
        // $data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('lname')])->row_array();
        // // echo "sudah masuk kah? " . $data['user']['Email'];

        // $data['title'] = 'Hotel UMN Facility';
        // $data['css'] = $this->load->view('include/css', NULL, TRUE);
        // $data['js'] = $this->load->view('include/js', NULL, TRUE);
        // $this->load->view('template/header', $data);
        // $this->load->view('pages/home_facilityDash');
        // $this->load->view('template/footer');
        // } else {
        $data['data'] = $this->Auth_model->get_facility();
        // echo "sudah masuk kah? " . $data['user']['Email'];

        $data['title'] = 'Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_main');
        $this->load->view('template/footer');
        // }
    }


    public function facilityDetail($id)
    {
        //$data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('lname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];
        $data['data'] = $this->Auth_model->facility_detail($id);
        $data['title'] = 'Detail | Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_detail');
        $this->load->view('template/footer');
    }

    public function book($id)
    {
        //$data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('lname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];
        $this->form_validation->set_rules('reservasi', 'Date', 'required');
        $this->form_validation->set_rules('stime', 'Start_Time', 'required');
        $this->form_validation->set_rules('etime', 'End_Time', 'required');
        if ($this->form_validation->run() == false) {
            $data['data'] = $this->Auth_model->facility_detail($id);
            $data['title'] = 'Book | Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $this->load->view('template/header', $data);
            $this->load->view('pages/home_book');
            $this->load->view('template/footer');
        } else {
            $data = [
                'Facility_ID' => $id,
                'Date' => htmlspecialchars($this->input->post('reservasi', true)),
                'Start_Time' => htmlspecialchars($this->input->post('stime', true)),
                'End_Time' => htmlspecialchars($this->input->post('etime', true)),
                'Status' => "Pending",
                'Account_ID' => $_SESSION['id']
            ];

            //$this->db->insert('request_listing',$data);
            $this->Auth_model->book($data);
            $this->session->set_flashdata('success_book', '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Success!</strong> Your facility has been booking </div>');

            redirect('home/reqUser');
        }
    }


    // ADMIN PAGE FUNCTION
    public function facilityDash()
    {
        $data['data'] = $this->Auth_model->get_facility();
        //$data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('fname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];

        $data['title'] = 'Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_facilityDash');
        $this->load->view('template/footer');
    }

    public function userlist()
    {
        //$data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('fname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];

        $data['data'] = $this->Auth_model->get_user();
        $data['title'] = 'Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_userList');
        $this->load->view('template/footer');
    }

    public function deleteFacility($id)
    {
        $result = $this->Auth_model->delete_facility($id);
        if ($result) {
            $this->session->set_flashdata('success_deleteFacility', '<div class="alert alert-warning alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>success!</strong> Your facility has been deleted </div>');

            redirect('home/facilityDash');
        } else {
            $this->session->set_flashdata('success_deleteFacility', '<div class="alert alert-warning alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Error!</strong> Your facility cant be delete </div>');
            redirect('home/facilityDash');
            $this->session->unset_userdata('success_deleteFacility');
        }
    }

    // Edit page ada di EditData.php


    public function reqUser()
    {
        //$data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('fname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];
        if ($_SESSION['role'] == "management" || $_SESSION['role'] == "admin") {
            $data['data'] = $this->Auth_model->get_req_admin();
            $data['title'] = 'Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $this->load->view('template/header', $data);
            $this->load->view('pages/home_req');
            $this->load->view('template/footer');
        } else if ($_SESSION['role'] == "user") {
            $id = $_SESSION['id'];
            $data['data'] = $this->Auth_model->get_req($id);
            $data['title'] = 'Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $this->load->view('template/header', $data);
            $this->load->view('pages/home_req');
            $this->load->view('template/footer');
        }
    }

    public function accReq($id)
    {
        $data = array(
            'id' => $id,
            'status' => "Accepted"
        );
        $result = $this->Auth_model->updateReq($data);
        if ($result) {
            $this->session->set_flashdata('success_acc', '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>success!</strong> The request has been approve </div>');

            redirect('home/reqUser');
            $this->session->unset_userdata('success_acc');
        } else {
            $this->session->set_flashdata('success_acc', '<div class="alert alert-warning alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Error!</strong> The request cant be approve </div>');

            redirect('home/reqUser');
        }
    }

    public function decReq($id)
    {
        $data = array(
            'id' => $id,
            'status' => "Declined"
        );
        $result = $this->Auth_model->updateReq($data);
        if ($result) {
            $this->session->set_flashdata('success_dec', '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>success!</strong> The request has been decline </div>');

            redirect('home/reqUser');
            $this->session->unset_userdata('success_dec');
        } else {
            $this->session->set_flashdata('success_dec', '<div class="alert alert-warning alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Error!</strong> The request cant be decline </div>');

            redirect('home/reqUser');
        }
    }

    public function deleteReq($id)
    {
        $result = $this->Auth_model->delete_req($id);
        if ($result) {
            $this->session->set_flashdata('success_delReq', '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>success!</strong> The request has been delete </div>');

            redirect('home/reqUser');
            $this->session->unset_userdata('success_delReq');
        } else {
            $this->session->set_flashdata('success_delReq', '<div class="alert alert-warning alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>Error!</strong> The request cant be delete </div>');

            redirect('home/reqUser');
        }
    }

    public function deleteUser($id)
    {
        $result = $this->Auth_model->delete_user($id);
        if ($result) {
            //kasi massege kalo berhasil
            $this->session->set_flashdata('success_editUser', '<div class="alert alert-warning alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><strong>success!</strong> Your data has been deleted </div>');

            redirect('home/userlist');
            // create unset session data
            $this->session->unset_userdata('success_editUser');
        }
    }

    // add facilities berada di controller Add.php
}
