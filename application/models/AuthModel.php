<?php
class AuthModel extends CI_Model
{
    public function createUser($data)
    {
        return $this->db->insert('users', $data);
    }

    public function getUser($data)
    {
        $db =  $this->db->get_where('users', $data)->row_array();
        return $db;
    }
}