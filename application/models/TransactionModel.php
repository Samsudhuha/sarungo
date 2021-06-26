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

    public function updateTransactionByUserAndId($user_id, $id, $total)
    {
        return $this->db->update('transactions', $total, array('user_id' => $user_id, 'id' => $id));
    }

    public function getTransactionCart($user_id)
    {
        $this->db->select('products.name, products.price, products.image, transactions.total, transactions.id');
        $this->db->from('products');
        $this->db->from('transactions');
        $this->db->where('products.id = transactions.product_id');
        $this->db->where('transactions.user_id', $user_id);
        $this->db->where('transactions.payment', null);
        $query = $this->db->get();

        return $query->result();
    }

    public function getTransactionByUserAndProduct($user_id, $product_id)
    {
        return $this->db->get_where('transactions', array('user_id' => $user_id, 'product_id' => $product_id, 'payment' => null))->row_array();
    }

    public function getTransactionByUser($user_id)
    {
        return $this->db->get_where('transactions', array('user_id' => $user_id, 'payment' => null))->row_array();
    }

    public function getTransaction()
    {
        $this->db->select('products.name as "product_name", transactions.payment, transactions.total, users.name as "username"');
        $this->db->from('products');
        $this->db->from('transactions');
        $this->db->from('users');
        $this->db->where('products.id = transactions.product_id');
        $this->db->where('users.id = transactions.user_id');
        $this->db->group_by("transactions.user_id");
        $this->db->group_by("transactions.product_id");
        $this->db->group_by("transactions.payment");
        $query = $this->db->get();

        return $query->result();
    }

    public function getIncome()
    {
        $this->db->select('sum(payment) as sum');
        $this->db->from('transactions');
        $this->db->where('payment is not null');
        $query = $this->db->get();

        return $query->result();
    }

    public function getOrder()
    {
        $this->db->select('count(1) as total');
        $this->db->from('transactions');
        $this->db->where('payment is null');
        $this->db->group_by("user_id");
        $query = $this->db->get();

        return $query->result();
    }

    public function getTransactionById($id)
    {
        return $this->db->get_where('transactions', array('id' => $id))->row_array();
    }

    public function deleteProductTransaction($id)
    {
        return $this->db->delete('transactions', array('id' => $id));
    }
}