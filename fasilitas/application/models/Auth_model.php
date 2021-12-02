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

    function get_email($email)
    {
        $email = $this->db->escape($email);
        $this->db->where('Email', $email);
        $result = $this->db->get('account')->row();
        return $result;
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
