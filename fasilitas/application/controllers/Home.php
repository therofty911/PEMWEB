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


    public function facilityDetail()
    {
        $data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('lname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];

        $data['title'] = 'Detail | Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_detail');
        $this->load->view('template/footer');
    }

    public function book()
    {
        $data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('lname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];

        $data['title'] = 'Book | Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_book');
        $this->load->view('template/footer');
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

    public function reqUser()
    {
        //$data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('fname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];

        $data['title'] = 'Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_req');
        $this->load->view('template/footer');
    }

    public function accReq($id)
    {
        $data = array(
            'id' => $id,
            'status' => "Accepted"
        );
        $result = $this->Auth_model->updateReq($data);
        if($result){
            //kasi massege kalo berhasil
            redirect('home/reqUser');
        }
        else{
            //kasi massege kalo gagal
            redirect('home/reqUser');
        }
    }

    public function decReq()
    {
        $data = array(
            'id' => $id,
            'status' => "Declined"
        );
        $result = $this->Auth_model->updateReq($data);
        if($result){
            //kasi massege kalo berhasil
            redirect('home/reqUser');
        }
        else{
            //kasi massege kalo gagal
            redirect('home/reqUser');
        }
    }

    public function deleteUser($id)
    {
        $result = $this->Auth_model->delete_user($id);
        if($result){
            //kasi massege kalo berhasil
            redirect('home/userlist');
        }
    }

    // add facilities berada di controller Add.php
}
