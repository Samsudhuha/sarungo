<?php
class ProductModel extends CI_Model
{
    public function createProduct($data)
    {
        return $this->db->insert('products', $data);
    }

    public function getProduct()
    {
        return $this->db->get('products')->result();
    }

    public function editProduct($data, $id)
    {
        return $this->db->update('products', $data, array('id' => $id));
    }

    public function getProductArrival()
    {
        return $this->db->get_where('products', array('type' => 1))->result();
    }

    public function getProductFeatureds()
    {
        return $this->db->get_where('products', array('type' => 2))->result();
    }

    public function getProductById($id)
    {
        return $this->db->get_where('products', array('id' => $id))->row_array();
    }

    public function deleteProduct($id)
    {
        return $this->db->delete('products', array('id' => $id));
    }
}