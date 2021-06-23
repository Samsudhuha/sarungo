<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('authModel');
        $this->load->library('session');
    }

	public function getRegister()
	{
		$this->load->view('auth/register');
	}

    public function postRegister()
	{
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('agree', 'Agree', 'required|trim');
        if ($this->form_validation->run() == false) {
            redirect('auth/getRegister');
        } else {
            $name       = $this->input->post('name');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');
            
            $data = [
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role' => 2,
            ];
            $this->authModel->createUser($data);

            return $this->load->view('auth/login');
        }
	}

    public function getLogin()
	{
		return $this->load->view('auth/login');
	}

    public function postLogin()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            return redirect('auth/getLogin');
        } else {
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');
            
            $data = [
                'email' => $email,
                'password' => $password,
            ];

            $user = $this->authModel->getUser($data);

            if($user) {
                $this->session->set_userdata('user', $user);
                if ($user['role'] == 1) {
                    return redirect('admin');
                }
                else {
                    return redirect('/');
                }
            } else {
                return redirect('auth/getLogin');
            }
        }
	}

    public function logout()
    {
        $this->session->unset_userdata('user');
        return redirect('/');
    }
}
