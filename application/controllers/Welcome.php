<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['arrivals'] = $this->productModel->getProductArrival();
		$data['featureds'] = $this->productModel->getProductFeatureds();
		$data['transactions'] = [];
		$data['total_price'] = 0;

		$user = $this->user;
		if ($user) {
			$transaction = $this->transactionModel->getTransactionByUser($user['id']);
	
			if ($transaction) {
				$data['transactions'] = $this->transactionModel->getTransactionCart($user['id']);
				for ($i=0; $i < count($data['transactions']); $i++) { 
					$data['total_price'] = $data['total_price'] + ((int) $data['transactions'][$i]->total * (int) $data['transactions'][$i]->price);
				}
			}
		}
		
		$this->load->view('home', $data);
	}
}
