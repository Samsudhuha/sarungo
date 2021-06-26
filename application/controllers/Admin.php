<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('productModel');
        $this->load->model('authModel');
        $this->load->model('transactionModel');

        $this->user = $this->session->userdata('user');
    }
	public function index()
	{
        $data['user'] = $this->user;
        $data['total_product'] = count($this->productModel->getProduct());
        $data['total_user'] = count($this->authModel->getAllUser());
        $data['total_income'] = $this->transactionModel->getIncome()[0]->sum;
		$order = $this->transactionModel->getOrder();
		if (count($order) == 0) {
			$data['total_order'] = 0;
		}
		else {
			$data['total_order'] = $order[0]->total;
		}

		$this->load->view('admin/index', $data);
	}
}
