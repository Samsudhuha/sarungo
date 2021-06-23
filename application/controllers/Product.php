<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
        $data['data'] = $this->productModel->getProduct();
        $data['user'] = $this->user;

		$this->load->view('admin/list_product', $data);
	}

    public function store()
    {
        $name    = $this->input->post('name');
        $price   = $this->input->post('price');
        $stock   = $this->input->post('stock');
        $type    = $this->input->post('type');
    
        $config['upload_path'] = './image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');

        $file_image = array('image_metadata' => $this->upload->data());
        $data = [
            'name'  => $name,
            'price' => $price,
            'stock' => $stock,
            'type' => $type,
            'image' => $file_image['image_metadata']['file_name'],
        ];


        $this->productModel->createProduct($data);
        return redirect('product');
    }

    public function edit()
    {
        $id      = $this->input->post('id');
        $name    = $this->input->post('name');
        $price   = $this->input->post('price');
        $stock   = $this->input->post('stock');
        $type    = $this->input->post('type');

        $data = [
            'name'  => $name,
            'price' => $price,
            'stock' => $stock,
            'type' => $type,
        ];

        $this->productModel->editProduct($data, $id);
        return redirect('product');
    }

    public function delete()
    {
        $id      = $this->input->post('id');

        $path = $this->productModel->getProductById($id)['image'];

        unlink('./image/' . $path); 

        $this->productModel->deleteProduct($id);
        return redirect('product');
    }
}
