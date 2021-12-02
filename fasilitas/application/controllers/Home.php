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
        $data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('lname')])->row_array();
        // echo "sudah masuk kah? " . $data['user']['Email'];

        $data['title'] = 'Hotel UMN Facility';
        $data['css'] = $this->load->view('include/css', NULL, TRUE);
        $data['js'] = $this->load->view('include/js', NULL, TRUE);
        $this->load->view('template/header', $data);
        $this->load->view('pages/home_main');
        $this->load->view('template/footer');
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
}
