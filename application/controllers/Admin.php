<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('productModel');

        $this->user = $this->session->userdata('user');
    }
	public function index()
	{
        $data['user'] = $this->user;

		$this->load->view('admin/index', $data);
	}
}
