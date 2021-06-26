<?php
class AuthModel extends CI_Model
{
    public function createUser($data)
    {
        return $this->db->insert('users', $data);
    }

    public function getUser($data)
    {
        return $this->db->get_where('users', $data)->row_array();
    }

    public function getAllUser()
    {
        return $this->db->get_where('users', array('role' => 2))->result();
    }
}