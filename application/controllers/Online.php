<?php defined('BASEPATH') OR exit('No direct script access allowed');


use PEAR2\Net\RouterOS;

class Online extends CI_Controller {

    function __construct() {
        parent::__construct();
        isLogin();
        
        $this->load->model('main');
    }

    public function index() {
        $data = array();
        $data['logs'] = '';
        $data['error'] = '';
        $data['users'] = $this->main->getAllUsers();
        try {
            $data['logs'] = mkUtil()->setMenu('/log')->getAll();
            $data['profiles'] = mkUtil()->setMenu('/ppp profile')->getAll();
        } catch (Exception $e) {
            $data['error'] =  $e->getMessage();
        }

        $this->load->view('header');
        $this->load->view('online', $data);
        $this->load->view('footer');

    }



    public function insert() {
        $data = array();
        $this->form_validation->set_rules('user', 'Connect User', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('online', 'refresh');
        } else {
            $data['online_name'] = $this->input->post('name');
            $data['online_password'] = $this->input->post('password');
            $data['online_service'] = $this->input->post('service');
            $data['online_profile'] = $this->input->post('profile');
            $this->db->where('id', $this->input->post('users'));
            $true = $this->db->update('users', $data);
            if ($true) {
                $this->session->set_flashdata('success', 'Online User Successfully Created');
                redirect('online', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Opps! Something Wrong');
                redirect('user', 'refresh');
            }
        }
    }


}

?>
