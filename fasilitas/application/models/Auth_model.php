<?php

class Auth_model extends CI_model
{

    //create anti sql injection
    // function regis($data)
    // {
    //     $regis['First_Name'] = $this->db->escape($data['fname']);
    //     $regis['Last_Name'] = $this->db->escape($data['lname']);
    //     $regis['Email'] = $this->db->escape($data['email']);
    //     $regis['Password'] = $this->db->escape($data['password']);
    //     $regis['Role'] = $this->db->escape($data['Role']);
    //     $this->db->insert('account', $regis);
    // }

    function get_email($email) //function login
    {
        // $email = $this->db->escape($email);
        // $this->db->where('Email', $email);
        // $result = $this->db->get('account')->row();
        // return $result;
        $this->db->where('Email', $email);
        $result = $this->db->get('account')->row();
        return $result;
    }

    function get_facility() //buat table facility, nantinya pake session buat yg ditampilinnya dari controller
    {
        $query = $this->db->query("SELECT * FROM facility_listing");
        return $query->result_array();
    }

    function facility_detail($id)
    {
        $this->db->where('Facility_ID', $id);
        $result = $this->db->get('facility_listing');
        return $result->row();
    }

    function updateReq($data)
    {
        extract($data);
        $this->db->where('Request_ID', $id);
        $this->db->update('request_listing', array('Status' => $status));
        return true;
    }

    function book($data)
    {
        $this->db->select('*');
        $this->db->from('request_listing');
        $this->db->join('account', 'account.Account_ID = request_listing.Account_ID');
        $this->db->join('facility_listing', 'facility_listing.Facility_ID = request_listing.Facility_ID');
        $this->db->insert('request_listing', $data);
    }

    function get_req($id)
    {
        $query = $this->db->select('*')
            ->from('request_listing')
            ->join('account', 'account.Account_ID = request_listing.Account_ID')
            ->join('facility_listing', 'facility_listing.Facility_ID = request_listing.Facility_ID')
            ->where('request_listing.Account_ID',$id)
            ->get();
        $query = $query->result();
        return $query;
    }

    function get_req_admin()
    {
        $query = $this->db->select('*')
            ->from('request_listing')
            ->join('account', 'account.Account_ID = request_listing.Account_ID')
            ->join('facility_listing', 'facility_listing.Facility_ID = request_listing.Facility_ID')
            ->where('Status',"Pending")
            ->get();
        $query = $query->result();
        return $query;
    }

    function delete_req($id)
    {
        $this->db->where('Request_ID', $id);
        $this->db->delete('request_listing');
        return true;
    }

    function get_user() //buat table user nanti di admin
    {
        $result = $this->db->get('account');
        $result = $result->result();
        return $result;
    }

    function edit_user($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_user($id, $values)
    {
        $this->db->where('Account_ID', $id);
        $this->db->replace('account', $values);
    }

    function new_facility($values)
    {
        $this->db->insert('facility_listing', $values);
    }

    function update_facility($id, $values)
    {
        $this->db->where('Facility_ID', $id);
        $this->db->update('facility_listing', $values);
    }

    // function edit_facility($id)
    // {
    //     $this->db->where('Facility_ID', $id);
    //     $result = $this->db->get('facility_listing');
    //     return $result->row();
    // }

    function delete_facility($id)
    {
        $this->db->where('Facility_ID', $id);
        $this->db->delete('facility_listing');
        return true;
    }

    function edit_users()
    {
    }

    function delete_user($id)
    {
        $this->db->get_where('Account_ID', $id);
        $this->db->delete('account');
        return true;
    }


    // function get_dosen()
    // {
    //     $query = $this->db->query("SELECT * FROM dosen");
    //     return $query->result_array();
    // }

    // function get_mahasiswa()
    // {
    //     $query = $this->db->query("SELECT * FROM mahasiswa");
    //     return $query->result_array();
    // }

    // function hapus_data($where, $table)
    // {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
}
