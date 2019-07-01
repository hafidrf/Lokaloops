<?php

class Items_model extends CI_Model {

	private $_table = "items";

	 function logged_id()
    {
        return $this->session->userdata('id');
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

}