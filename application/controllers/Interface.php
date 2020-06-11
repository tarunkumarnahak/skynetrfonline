<?php defined('BASEPATH') OR exit('No direct script access allowed');



use PEAR2\Net\RouterOS;

class Interfaces extends CI_Controller {

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
        $this->load->view('interface', $data);
        $this->load->view('footer');

    }



    public function insert() {
        $data = array();
        $this->form_validation->set_rules('user', 'Connect User', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('interface', 'refresh');
        } else {
            $data['interface_name'] = $this->input->post('name');
            $data['interface_password'] = $this->input->post('password');
            $data['interface_service'] = $this->input->post('service');
            $data['interface_profile'] = $this->input->post('profile');
            $this->db->where('id', $this->input->post('users'));
            $true = $this->db->update('users', $data);
            if ($true) {
                $this->session->set_flashdata('success', 'Interface User Successfully Created');
                redirect('interface', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Opps! Something Wrong');
                redirect('user', 'refresh');
            }
        }
    }


}

?>
