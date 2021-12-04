<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model');
    }

    public function index()
    {
    }

    public function editFacility($id = NULL)
    {
        $where = array('Facility_ID' => $id);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('img', 'Image', 'callback_validate_edit_image');
        $this->form_validation->set_rules('detail', 'Detail', 'required');
        if ($this->form_validation->run() == false) {
            $data['data'] = $this->Auth_model->edit_facility($where, 'facility_listing')->result();
            $data['title'] = 'Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $data['facility'] = $id;
            $this->load->view('template/header', $data);
            $this->load->view('pages/edit_facilityDash');
            $this->load->view('template/footer');
        } else {
            $id = $this->input->post('Facility_ID');
            $config['upload_path']          = './assets/poster/';
            $config['allowed_types']        = 'gif|jpg|png|PNG';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('img')) {

                $values = array(
                    'Facility_ID' => $this->input->post('facilityid', TRUE),
                    'Name' => $this->input->post('name', TRUE),
                    'Image' => $this->input->post('img', TRUE),
                    'Detail' => $this->input->post('detail', TRUE),
                );
                $this->Auth_model->update_facility($id, $values);
                redirect('home/facilityDash');
            } else {
                $poster = $this->upload->data();
                $poster = "assets/poster/" . $poster['file_name'];
                $values = array(
                    'Facility_ID' => $this->input->post('facilityid', TRUE),
                    'Name' => $this->input->post('name', TRUE),
                    'Image' => $poster,
                    'Detail' => $this->input->post('detail', TRUE),

                );
                $this->Auth_model->update_facility($id, $values);
                redirect('home/facilityDash');
            }
        }
    }



    // $id = $this->input->post('facilityid');
    // $name = $this->input->post('name');
    // $img = $this->input->post('img');
    // $detail = $this->input->post('detail');

    // $config['upload_path']          = './assets/poster/';
    // $config['allowed_types']        = 'gif|jpg|png|PNG';
    // $config['max_size']             = 10000;
    // $config['max_width']            = 10000;
    // $config['max_height']           = 10000;

    // $this->load->library('upload', $config);

    // if (!$this->upload->do_upload('img')) {
    //     $data = array(
    //         'Facility_ID' => $id,
    //         'Name' => $name,
    //         'Image' => $img,
    //         'Detail' => $detail,
    //     );
    //     $where = array('Facility_ID' => $id);

    //     $this->Auth_model->update_facility($where, $data, 'facility_listing');
    //     redirect('home/facilityDash');
    // } else {
    //     $poster = $this->upload->data();
    //     $poster = 'assets/poster/' . $poster['file_name'];
    //     $data = array(
    //         'Facility_ID' => $id,
    //         'Name' => $name,
    //         'Image' => $img,
    //         'Detail' => $detail,

    //     );
    //     $where = array('Facility_ID' => $id);

    //     $this->Auth_model->update_facility($where, $data, 'facility_listing');
    //     redirect('home/facilityDash');
    // }

    public function validate_edit_image()
    {
        $check = TRUE;
        if (isset($_FILES['img']) && $_FILES['img']['size'] != 0) {
            $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
            $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
            $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
            $detectedType = exif_imagetype($_FILES['img']['tmp_name']);
            $type = $_FILES['img']['type'];
            if (!in_array($detectedType, $allowedTypes)) {
                $this->form_validation->set_message('validate_edit_image', 'Invalid Image Content!');
                $check = FALSE;
            }
            if (filesize($_FILES['img']['tmp_name']) > 4097152) {
                $this->form_validation->set_message('validate_edit_image', 'The Image file size shoud not exceed 4MB!');
                $check = FALSE;
            }
            if (!in_array($extension, $allowedExts)) {
                $this->form_validation->set_message('validate_edit_image', "Invalid file extension {$extension}");
                $check = FALSE;
            }
        }
        return $check;
    }


    public function editUser($id = NULL)
    {
        $where = array('Account_ID' => $id);
        if ($this->form_validation->run() == false) {
            $data['data'] = $this->Auth_model->edit_user($where, 'account')->result();
            $data['title'] = 'Edit user | Hotel UMN Facility';
            $data['css'] = $this->load->view('include/css', NULL, TRUE);
            $data['js'] = $this->load->view('include/js', NULL, TRUE);
            $data['account'] = $id;
            $this->load->view('template/header', $data);
            $this->load->view('pages/edit_userList');
            $this->load->view('template/footer');
        } else {
            $id = $this->input->post('Account_ID');
            $values = array(
                'Account_ID' => $this->input->post('accountid', TRUE),
                'First_Name' => $this->input->post('fname', TRUE),
                'Last_Name' => $this->input->post('lname', TRUE),
                'Email' => $this->input->post('email', TRUE),
                'Role' => $this->input->post('role', TRUE),
            );
            $this->Auth_model->update_user($id, $values);
            redirect('home/userlist');
        }
    }
}
