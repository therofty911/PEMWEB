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

    // Edit page ada di EditData.php


    public function reqUser()
    {
        //$data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('fname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];
        if($_SESSION['role'] == "management" || $_SESSION['role'] == "admin"){
            $data['data'] = $this->Auth_model->get_req_admin();
            $data['title'] = 'Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $this->load->view('template/header', $data);
            $this->load->view('pages/home_req');
            $this->load->view('template/footer');
        }
        else if($_SESSION['role'] == "user"){
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
            //kasi massege kalo berhasil
            redirect('home/reqUser');
        } else {
            //kasi massege kalo gagal
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
            //kasi massege kalo berhasil
            redirect('home/reqUser');
        } else {
            //kasi massege kalo gagal
            redirect('home/reqUser');
        }
    }

    public function deleteReq($id)
    {    
        $result = $this->Auth_model->delete_req($id);
        if ($result) {
            //kasi massege kalo berhasil
            redirect('home/reqUser');
        } else {
            //kasi massege kalo gagal
            redirect('home/reqUser');
        }
    }

    public function deleteUser($id)
    {
        $result = $this->Auth_model->delete_user($id);
        if ($result) {
            //kasi massege kalo berhasil
            redirect('home/userlist');
        }
    }

    // add facilities berada di controller Add.php
}
