<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('img', 'Image', 'callback_validate_image');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->form_validation->run() == false) {
            // $data['user'] = $this->db->get_where('account', ['Last_Name' => $this->session->userdata('lname')])->row_array();
            // echo "sudah masuk kah? " . $data['user']['Email'];

            $data['title'] = 'Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $this->load->view('template/header', $data);
            $this->load->view('pages/home_add');
            $this->load->view('template/footer');
        } else {
            $config['upload_path']          = './assets/poster/';
            $config['allowed_types']        = 'gif|jpg|png|PNG';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) {
                echo "<div class='alert alert-success' role='alert'> Failed to upload </div>";
            } else {
                $poster = $this->upload->data();
                $poster = 'assets/poster/' . $poster['file_name'];
                $values = array(
                    'Name' => $this->input->post('name', TRUE),
                    'Image' => $poster,
                    'Detail' => $this->input->post('detail', TRUE),
                );
                $this->Auth_model->new_facility($values);
                redirect('home/facilityDash');
            }
        }
    }

    public function validate_image()
    {
        $check = TRUE;
        if ((!isset($_FILES['img'])) || $_FILES['img']['size'] == 0) {
            $this->form_validation->set_message('validate_image', 'The {field} field is required');
            $check = FALSE;
        } else if (isset($_FILES['img']) && $_FILES['img']['size'] != 0) {
            $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
            $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
            $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            $detectedType = exif_imagetype($_FILES['img']['tmp_name']);
            $type = $_FILES['img']['type'];
            if (!in_array($detectedType, $allowedTypes)) {
                $this->form_validation->set_message('validate_image', 'Invalid Image Content!');
                $check = FALSE;
            }
            if (filesize($_FILES['img']['tmp_name']) > 4097152) {
                $this->form_validation->set_message('validate_image', 'The Image file size shoud not exceed 4MB!');
                $check = FALSE;
            }
            if (!in_array($extension, $allowedExts)) {
                $this->form_validation->set_message('validate_image', "Invalid file extension {$extension}");
                $check = FALSE;
            }
        }
        return $check;
    }
}
