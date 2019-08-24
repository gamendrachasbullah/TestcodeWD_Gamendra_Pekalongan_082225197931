<?php 
if (!defined('BASEPATH'))
{
    exit("No Direct Script Access Allowed");
}

class Login extends My_Controller
{
    public function index()
    {
        if (!$_POST)
        {
            $input = (object) $this->login->getDefaultValues();
        }
        else
        {
            $input = (object) $this->input->post(null, true);
        }

        if(!$this->login-validate())
        {
            $this->load->view('login_form', compact('input'));
            return;
        }

        if ($this->login->login($input))
        {
            redirect(base_url());
        }
        else
        {
            $this->session->set_flashdata('error', 'username atau password salah');
        }

        redirect(login);
    }

    public function logout()
    {
        $this->login->logout();
        redirect(base_url());
    }
}