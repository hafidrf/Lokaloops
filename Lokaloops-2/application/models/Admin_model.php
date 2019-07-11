<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }
    //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('id');
    }

    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    public function insertOwner ($data) {

        //insert data to the database
        $this->db->insert('owner',$data);
        return $this->db->insert_id();
    }

    function getIdOwner($where)
    {
        $this->db->select('id');
        $this->db->from("owner");
        $this->db->where("nama",$where);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    public function insertUser ($data) {

        //insert data to the database
        $this->db->insert('login',$data);
        return $this->db->insert_id();
    }

}