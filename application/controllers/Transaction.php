<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('productModel');
        $this->load->model('transactionModel');

        $this->user = $this->session->userdata('user');
    }

	public function index()
	{
		$data['data'] = $this->transactionModel->getTransaction();
        $data['user'] = $this->user;

		$this->load->view('admin/list_transaction', $data);
	}
	public function addToCart($id)
	{
		$user 	 = $this->user;

		$transaction = $this->transactionModel->getTransactionByUserAndProduct($user['id'], $id);
		if ($transaction) {
			$this->addProduct($id);
		}
		$data = [
			'user_id' => $user['id'], 
			'product_id' => $id, 
			'total' => 1, 
		];
		$this->transactionModel->createTransaction($data);
		return redirect('/');
	}

	public function addProduct($id)
	{
		$user 	 = $this->user;

		$product_total = (int) $this->transactionModel->getTransactionByUserAndProduct($user['id'], $id)['total'] + 1;
		$data = [
			'total' => $product_total, 
		];
		
		$this->transactionModel->updateTransactionByUserAndProduct($user['id'], $id, $data);
		return redirect('/');
	}

	public function deleteProductTransaction($id)
	{
		$this->transactionModel->deleteProductTransaction($id);
		return redirect('/');
	}

	public function viewTransaction()
	{
		$user 	 = $this->user;

		$data['transactions'] = $this->transactionModel->getTransactionCart($user['id']);
		$data['total_price'] = 0;
		for ($i=0; $i < count($data['transactions']); $i++) { 
			$data['total_price'] = $data['total_price'] + ((int) $data['transactions'][$i]->total * (int) $data['transactions'][$i]->price);
		}
		$this->load->view('invoice', $data);
	}

	public function deleteTransaction($id)
	{
		$this->transactionModel->deleteProductTransaction($id);
		return redirect('transaction/viewTransaction');
	}

	public function addTransaction($id)
	{
		$user 	 = $this->user;
		
		$product_total = (int) $this->transactionModel->getTransactionById($id)['total'] + 1;
		$data = [
			'total' => $product_total, 
		];

		$this->transactionModel->updateTransactionByUserAndId($user['id'], $id, $data);
		return redirect('transaction/viewTransaction');
	}

	public function minusTransaction($id)
	{
		$user 	 = $this->user;

		$product_total = (int) $this->transactionModel->getTransactionById($id)['total'] - 1;
		if ($product_total == 0) {
			return $this->deleteTransaction($id);
		}
		$data = [
			'total' => $product_total, 
		];
		
		$this->transactionModel->updateTransactionByUserAndId($user['id'], $id, $data);
		return redirect('transaction/viewTransaction');
	}

	public function payment()
	{
		$user 	 = $this->user;

		$data['transactions'] = $this->transactionModel->getTransactionCart($user['id']);
		for ($i=0; $i < count($data['transactions']); $i++) { 
			$payment = [
				'payment' => ((int) $data['transactions'][$i]->total * (int) $data['transactions'][$i]->price),
			];

			$this->transactionModel->updateTransactionByUserAndId($user['id'], $data['transactions'][$i]->id, $payment);
		}

		return redirect('/');
	}
}
