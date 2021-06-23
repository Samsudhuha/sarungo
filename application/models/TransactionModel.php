<?php
class TransactionModel extends CI_Model
{
    public function createTransaction($data)
    {
        return $this->db->insert('transactions', $data);
    }

    public function updateTransactionByUserAndProduct($user_id, $product_id, $total)
    {
        return $this->db->update('transactions', $total, array('user_id' => $user_id, 'product_id' => $product_id));
    }

    public function getTransactionCart($user_id)
    {
        $this->db->select('products.name, products.price, products.image, transactions.total, transactions.id');
        $this->db->from('products');
        $this->db->from('transactions');
        $this->db->where('products.id = transactions.product_id');
        $this->db->where('transactions.user_id', $user_id);
        $query = $this->db->get();

        return $query->result();
    }

    public function getTransactionByUserAndProduct($user_id, $product_id)
    {
        return $this->db->get_where('transactions', array('user_id' => $user_id, 'product_id' => $product_id))->row_array();
    }

    public function getTransactionByUser($user_id)
    {
        return $this->db->get_where('transactions', array('user_id' => $user_id))->row_array();
    }

    public function deleteProductTransaction($id)
    {
        return $this->db->delete('transactions', array('id' => $id));
    }
}