<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Payments extends CI_Controller {

    function __construct() {
        parent::__construct();
        isAdmin();
        
        isLogin();
        $this->load->model('main');
    }

    public function index() {
        $data['payments'] = $this->main->getAllPayments();
        $this->load->view('header');
        $this->load->view('allpayments', $data);
        $this->load->view('footer');
    }

    public function all() {
        $data['payments'] = $this->main->getAllPayments();
        $this->load->view('header');
        $this->load->view('allpayments', $data);
        $this->load->view('footer');
    }

    public function bymonth() {
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $data['payments'] = $this->main->getPaymentsByMonth($month, $year);
        $this->load->view('header');
        $this->load->view('allpayments', $data);
        $this->load->view('footer');
    }

    public function byyear() {
        $year = $this->input->post('year');
        $data['payments'] = $this->main->getPaymentsByYear($year);
        $this->load->view('header');
        $this->load->view('allpayments', $data);
        $this->load->view('footer');
    }

    public function delete($id) {
        $this->db->where('paymentid', $id);
        $this->db->delete('payments');
        $this->session->set_flashdata('success', 'Successfully Deleted');
        redirect(base_url() . 'home');
    }

}

?>
